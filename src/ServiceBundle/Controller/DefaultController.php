<?php

namespace ServiceBundle\Controller;

use CommonBundle\Controller\BaseController;
use CommonBundle\Helpers\EntityHelper;
use CommonBundle\Util\ServiceMessages;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends BaseController
{

    /**
     * @Route("/masterjson", name="service_masterjson")
     */
    public function assignedmasterjsonAction()
    {

        $result['input'] = $_REQUEST;
        $masterid = isset($_REQUEST['masterid']) ? $_REQUEST['masterid'] : '';
        $mastername = isset($_REQUEST['mastername']) ? $_REQUEST['mastername'] : '';
        $findid = isset($_REQUEST['findid']) ? $_REQUEST['findid'] : '';
        if (strlen($masterid) <= 0) {
            $result['success'] = ServiceMessages::SUCCESS_FALSE;
            $result['message'] = 'masterid  missing';
            $result['data'] = (object)[];
        } else {
            try {
                $entityHelper = new EntityHelper(parent::getEm());
                $masters = $entityHelper->EntityRepository($mastername)->findBy(array($findid => $masterid));
                if ($masters) {
                    $result['success'] = ServiceMessages::SUCCESS_TRUE;
                    $result['message'] = 'Successfull get data';
                    $resultArray['masters'] = $entityHelper->Entity($mastername, '')->convertObjectsToArray($masters);
                    $result['data'] = $resultArray;
                } else {
                    $data = array(
                        'Id' => '0',
                        'Name' => 'No Record Found',
                    );
                    $result['success'] = ServiceMessages::SUCCESS_TRUE;
                    $result['message'] = 'No data found';
                    $resultArray['masters'][] = $data;
                    $result['data'] = $resultArray;
                }

            } catch (\Exception $e) {
                $result['success'] = ServiceMessages::SUCCESS_FALSE;
                $result['message'] = $e->getMessage();
                $result['data'] = (object)[];
            }
        }
        $output = parent::getResult($result);
        $response = new JsonResponse();
        $response->setData($output);
        return $response;
    }

    /**
     *
     * @Route("/masters", name="symfony_masters")
     *
     */
    public function mastersAction()
    {
        $result['input'] = $_REQUEST;
        $master = isset($_REQUEST['master_name']) ? $_REQUEST['master_name'] : ''; //manderoty

        $arrMaster = explode(",", $master);
        $arrMastersData = array();
        try {
            if (count($arrMaster) > 0) {
                $entityHelper = new EntityHelper(parent::getEm());
                foreach ($arrMaster as $value) {
                    $master_data = $entityHelper->EntityRepository($value)->findBy(array('status'=>1));
                    $master_data_array = $entityHelper->Entity($value, '')->convertObjectsToArray($master_data);
                    if (count($master_data_array) > 0) {
                        $arrMastersData[$value] = $master_data_array;
                    } else {
                        $arrMastersData[$value] = array();
                    }
                }
                if (count($arrMastersData) > 0) {
                    $result['data'] = $arrMastersData;
                    $result['success'] = ServiceMessages::SUCCESS_TRUE;
                    $result['message'] = ServiceMessages::SUCCESSFUL_ACCESS;
                }
            } else {
                $result['data'] = [];
                $result['success'] = ServiceMessages::SUCCESS_FALSE;
                $result['message'] = ServiceMessages::PARAMETER_ISSUE;
            }
        } catch (\Exception $e) {
            $result['success'] = ServiceMessages::SUCCESS_FALSE;
            $result['message'] = $e->getMessage();
            $result['data'] = (object)[];
        }
        $output = parent::GetResult($result);
        $response = new JsonResponse();
        $response->setData($output);
        return $response;
    }
}
