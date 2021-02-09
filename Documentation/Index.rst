.. include:: Includes.txt
.. include:: Images.txt

.. _start:

========================
Cart - Basket Information
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

Allow to show more information into the basket


Basket-Template
---------------
- File: ProductList.html

Sample for the Template

::

    <f:if condition="{product.additionalArray.details}">
        <div class="content--categorie">
            <f:for each="{product.additionalArray.details.tags}" as="tag" iteration="iterator">
                <h4>{tag.title}</h4>
            </f:for>
        </div>
    </f:if>

