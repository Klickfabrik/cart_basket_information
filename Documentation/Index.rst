.. include:: Includes.txt
.. include:: Images.txt

.. _start:

========================
Cart - Basket Image
========================

:Version:
      |release|

:Language:
      en

:Keywords:
       cart, cart_products, image, basket

:Copyright:
      2021

:Authors:
      TYPO3 community (see :ref:`credits`)

:License:
      Open Publication License available from `www.opencontent.org/openpub/
      <http://www.opencontent.org/openpub/>`_




**What does it do?**

Allow to display an image into the basket


**Screenshots**

- Display the image like this

|basket_image|


Basket-Template
---------------
- File: ProductList.html

Sample for the Template

::

    <f:if condition="{product.additionalArray.details}">
        <div class="product-details">

        </div>
    </f:if>

