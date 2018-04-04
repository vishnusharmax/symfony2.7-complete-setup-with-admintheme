<?php

namespace AdminBundle\Controller;
use CommonBundle\Controller\BaseController;
use CommonBundle\Helpers\EntityHelper;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends BaseController
{

    /**
     * @Route("/login", name="site_login")
     */
    public function loginAction(Request $request)
    {
        $entityHelper = new EntityHelper(parent::GetEm());
        $LoggedInUser = $entityHelper->Entity (EntityHelper::ADMINUSER, '');
        $form = $entityHelper->EntityForm (EntityHelper::ADMINUSER);
        $userLoginForm = $this->createForm($form, $LoggedInUser);
        $userLoginForm->handleRequest($request);
        if ($request->getMethod() === "POST") {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $userLogin =$entityHelper->EntityRepository(EntityHelper::ADMINUSER)
                ->findOneBy(array(
                    'email' => $email,
                    'password' => md5($password),
                    'status' => 1
                ));
            if ($userLogin) {
                $data = $userLogin->getUserrole() ? $userLogin->getUserrole()->getStatus() : '';
                if ($data == 1) {
                    if (isset($_POST['remember_me'])) { // if user check the remember me checkbox
                        $twoDays = 60 * 60 * 24 * 2 + time();
                        setcookie('email', $_POST['email'], $twoDays);
                        setcookie('password', $_POST['password'], $twoDays);
                    } else { // if user not check the remember me checkbox
                        $twoDaysBack = time() - 60 * 60 * 24 * 2;
                        setcookie('email', '', $twoDaysBack);
                        setcookie('password', '', $twoDaysBack);
                    }
                    $loggedInUser = parent::SetLoggedInUser($request, $userLogin);
                    return $this->redirectToRoute('show_dashboard',array('itemType'=>EntityHelper::DASHBOARD));
                } else {
                    $this->addFlash(
                        'login',
                        'Your Role is Disable'
                    );
                    return $this->redirectToRoute('site_login');

                }
            }else {
                $this->addFlash(
                    'login',
                    'Something Wrong..!'
                );
                return $this->redirectToRoute('site_login');
            }
        }
        return $this->render('AdminBundle:Login:index.html.twig', array(
            'loginform' => $userLoginForm->createView()
        ));
    }

    /**
     * @Route("/logout", name="site_logout")
     */
    public function logoutAction(Request $request)
    {
        $request->getSession()->clear('User');
        $request->getSession()->remove('User');
        return $this->redirect($this->generateUrl('site_login'));
    }
}
