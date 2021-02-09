<?php
namespace Klickfabrik\CartBasketInformation\Slots;


class AddInformationSlot
{
    /**
     * @return array
     */
    public function addDetails(array $params)
    {
        $productObject = $params['productProduct'];
        $cartProduct = $params['cartProduct'];
        $cartProduct->setAdditional('details', [
            'teaser'            => $productObject->getTeaser(),
            'description'       => $productObject->getDescription(),
            'categories'        => $productObject->getCategories(),
            'tags'              => $productObject->getTags(),
            'serviceAttribute1' => $productObject->getServiceAttribute1(),
            'serviceAttribute2' => $productObject->getServiceAttribute2(),
            'serviceAttribute3' => $productObject->getServiceAttribute3(),
        ]);

        $params['cartProduct'] = $cartProduct;
        return [$params];
    }
}