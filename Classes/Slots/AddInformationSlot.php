<?php
namespace Klickfabrik\CartBasketInformation\Slots;


class AddInformationSlot
{

    // Settings Typoscrip
    protected $settings = null;


    /**
     * @return array
     */
    public function addDetails(array $params)
    {

        // load settings
        $this->getSettings();


        $productObject  = $params['productProduct'];
        $cartProduct    = $params['cartProduct'];

        // Custom
        if(isset($this->settings['basketFields'])){
            foreach ($this->settings['basketFields'] as $addKey => $addValues){
                if(empty($addValues))
                    continue;

                if($addValues === "all"){
                    $cartProduct->setAdditional($addKey,$productObject);
                } else {
                    $fields     = explode(",", $addValues);
                    $tmpArray   = [];

                    foreach ($fields as $field){
                        $field = trim($field);
                        if(empty($field))
                            continue;

                        $getField = sprintf("get%s", ucfirst($field));
                        try {
                            $tmpArray[$field] = $productObject->$getField();
                        } catch (Exception $e){

                        };
                    }
                    $cartProduct->setAdditional($addKey,$tmpArray);
                }
            }
        }
        // Default
        else {
            $cartProduct->setAdditional('details', [
                'teaser'            => $productObject->getTeaser(),
                'description'       => $productObject->getDescription(),
                'categories'        => $productObject->getCategories(),
                'tags'              => $productObject->getTags(),
                'serviceAttribute1' => $productObject->getServiceAttribute1(),
                'serviceAttribute2' => $productObject->getServiceAttribute2(),
                'serviceAttribute3' => $productObject->getServiceAttribute3(),
            ]);
        }

        $params['cartProduct'] = $cartProduct;
        return [$params];
    }

    private function getSettings(){
        $objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
        $configurationManager = $objectManager->get('TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManagerInterface');
        $this->settings = $configurationManager->getConfiguration(
            \TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface::CONFIGURATION_TYPE_SETTINGS
        );
    }
}