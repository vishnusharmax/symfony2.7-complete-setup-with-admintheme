<?php

namespace AdminBundle\Controller;

use CommonBundle\Controller\BaseController;
use CommonBundle\Helpers\EntityHelper;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends BaseController
{
    /**
     * @Route("/dashboard/{itemType}",name="show_dashboard")
     */
    public function indexAction(Request $request, $itemType)
    {

        $entityHelper = new EntityHelper(parent::GetEm());
        $loggedInUser = parent::GetLoggedInUser($request);
        if (isset($loggedInUser)) {
            try {
                return $this->render($entityHelper->ListTwig($itemType),
                    array(EntityHelper::USERSDATA => $loggedInUser, EntityHelper::ITEMTYPE => $itemType
                   ));
            } catch (\Exception $e) {
                return $this->render($entityHelper->ListTwig(EntityHelper::ERROR),
                    array(
                        EntityHelper::MESSAGE => $e->getMessage(), EntityHelper::CODE => $e->getCode(), EntityHelper::LINE => $e->getLine()
                    ));
            }
        } else {

            return $this->redirectToRoute(EntityHelper::SITELOGOUT);
        }

    }
    /**
     * @Route("/item_list/{itemType}", name="admin_item_list")
     */
    public function listitemAction(Request $request, $itemType)
    {
        $entityHelper = new EntityHelper(parent::GetEm());
        $loggedInUser = parent::GetLoggedInUser($request);
        if (isset($loggedInUser)) {
            try {

                $items = $entityHelper->EntityRepository($itemType)->findAll();


                return $this->render($entityHelper->ListTwig($itemType), array(
                    EntityHelper::ITEMS => count($items) ? $items : '',
                    EntityHelper::ITEMTYPE => $itemType,
                    EntityHelper::ITEMTITLE => $entityHelper->EntityTitle($itemType),
                    EntityHelper::USERSDATA => $loggedInUser,
                ));
            } catch (\Exception $e) {
                return $this->render($entityHelper->ListTwig(EntityHelper::ERROR),
                    array(
                        EntityHelper::MESSAGE => $e->getMessage(), EntityHelper::CODE => $e->getCode(), EntityHelper::LINE => $e->getLine()
                    ));
            }
        } else {
            return $this->redirectToRoute(EntityHelper::SITELOGOUT);
        }
    }

    /**
     * @Route("/item_details/{itemType}/{id}", name="admin_item_details")
     */
    public function itemdetailsAction(Request $request, $itemType, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entityHelper = new EntityHelper($em);
        $item = $entityHelper->Entity($itemType, $id);
        $loggedInUser = parent::GetLoggedInUser($request);
        if (isset($loggedInUser)) {
            try {
                return $this->render($entityHelper->DetailsTwig($itemType), array(
                    EntityHelper::ITEMFORM => $this->createForm($entityHelper->EntityForm($itemType), $item, array(
                        EntityHelper::ACTION => $this->generateUrl(EntityHelper::ADMINITMEADDEDIT, array(EntityHelper::ITEMTYPE => $itemType, EntityHelper::ID => $id)),
                        EntityHelper::METHOD => 'POST',
                    ))->createView(),
                    EntityHelper::ITEMTYPE => $itemType,
                    EntityHelper::ITEMTITLE => $entityHelper->EntityTitle($itemType),
                    EntityHelper::ID => $id,
                    EntityHelper::USERSDATA => $loggedInUser
                ));
            } catch (\Exception $e) {
                return $this->render($entityHelper->ListTwig(EntityHelper::ERROR),
                    array(
                        EntityHelper::MESSAGE => $e->getMessage(), EntityHelper::CODE => $e->getCode(), EntityHelper::LINE => $e->getLine()
                    ));
            }
        } else {
            return $this->redirectToRoute(EntityHelper::SITELOGOUT);
        }
    }

    /**
     * @Route("/item_addedit/{itemType}/{id}", name="admin_item_addedit")
     */
    public function addedititemAction(Request $request, $itemType, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entityHelper = new EntityHelper($em);
        $LoggedInUser = parent::GetLoggedInUser($request);
        if ($LoggedInUser) {
            try {
                $item = $entityHelper->Entity($itemType, $id);
                $itemForm = $this->createForm($entityHelper->EntityForm($itemType), $item);
                $itemForm->handleRequest($request);
                $formName = $itemForm->getName();
                if ($LoggedInUser) {
                    if ($request->getMethod() === "POST" && $itemForm->isSubmitted()) {
                        $finddata = $entityHelper->Entity($itemType, $id);
                        if ($finddata->getId() > 0) {
                            $item->setCreatedby($LoggedInUser->getId());
                            $item->setModifiedby($LoggedInUser->getId());
                            $item->setDatemodified(new \DateTime());
                            $em->merge($item);
                        } else {
                            $item->setCreatedby($LoggedInUser->getId());
                            $item->setModifiedby($LoggedInUser->getId());
                            $em->persist($item);
                        }
                        $em->flush();
                    }
                }
                return $this->redirectToRoute(EntityHelper::ADMINITEMLIST, array(EntityHelper::ITEMTYPE => $itemType));
            } catch (\Exception $e) {
                return $this->render($entityHelper->ListTwig(EntityHelper::ERROR),
                    array(
                        EntityHelper::MESSAGE => $e->getMessage(), EntityHelper::CODE => $e->getCode(), EntityHelper::LINE => $e->getLine()
                    ));
            }
        } else {
            return $this->redirectToRoute(EntityHelper::SITELOGOUT);
        }
    }

    /**
     * @Route("/setstatus/{itemType}/{id}", name="set_status")
     */
    public function statusAction(Request $request, $itemType, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entityHelper = new EntityHelper($em);
        $LoggedInUser = parent::GetLoggedInUser($request);
        if ($LoggedInUser) {
            try {
                $finddata = $entityHelper->EntityRepository($itemType)->findOneBy(array(EntityHelper::ID => $id));
                if ($finddata) {
                    $value = $finddata->getStatus();
                    if ($value == EntityHelper::ZERO) {
                        $finddata->setStatus(EntityHelper::ONE);
                        $em->merge($finddata);
                        $em->flush();

                    } else {
                        $finddata->setStatus(EntityHelper::ZERO);
                        $em->merge($finddata);
                        $em->flush();
                    }
                }
                return $this->redirectToRoute(EntityHelper::ADMINITEMLIST, array(EntityHelper::ITEMTYPE => $itemType));
            } catch (\Exception $e) {
                return $this->render($entityHelper->ListTwig(EntityHelper::ERROR),
                    array(
                        EntityHelper::MESSAGE => $e->getMessage(), EntityHelper::CODE => $e->getCode(), EntityHelper::LINE => $e->getLine()
                    ));
            }
        } else {
            return $this->redirectToRoute(EntityHelper::SITELOGOUT);
        }


    }
    /**
     * @Route("/del/{itemType}/{id}", name="set_del")
     */
    public function delAction(Request $request, $itemType, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entityHelper = new EntityHelper($em);
        $LoggedInUser = parent::GetLoggedInUser($request);
        if ($LoggedInUser) {
            try {
                $finddata = $entityHelper->EntityRepository($itemType)->findOneBy(array(EntityHelper::ID => $id));
                if ($finddata) {
                    $em->remove($finddata);
                    $em->flush();

                }
                return $this->redirectToRoute(EntityHelper::ADMINITEMLIST, array(EntityHelper::ITEMTYPE => $itemType));
            } catch (\Exception $e) {
                return $this->render($entityHelper->ListTwig(EntityHelper::ERROR),
                    array(
                        EntityHelper::MESSAGE => $e->getMessage(), EntityHelper::CODE => $e->getCode(), EntityHelper::LINE => $e->getLine()
                    ));
            }
        } else {
            return $this->redirectToRoute(EntityHelper::SITELOGOUT);
        }


    }

}
