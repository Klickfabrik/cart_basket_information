.. every .rst file should include Includes.txt
.. use correct path!

.. include:: Includes.txt

.. Every manual should have a start label for cross-referencing to
.. start page. Do not remove this!

.. _start:

=============================================================
Cart - Basket Information
=============================================================

:Version:
   |release|

:Language:
   en

:Keywords:
   cart, cart_products, product_information, basket

:Copyright:
   2021

:Authors:
   Marc Finnern

:Email:
   marc@klickfabrik.net

:License:
   This extension documentation is published under the
   `CC BY-NC-SA 4.0 <https://creativecommons.org/licenses/by-nc-sa/4.0/>`__ (Creative Commons)
   license

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
