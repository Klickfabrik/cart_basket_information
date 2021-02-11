.. include:: /Includes.rst.txt

============
Typoscript
============

Basket-Fields with Typoscript


.. container:: table-row

   Description
        Allow to configure field in typoscript

   Default
         ::

            plugin.tx_cart {
                settings {
                    basketFields {
                        #single field(s) - seperate with ,
                        details = teaser,description

                        #fullproduct
                        product = all
                    }
                }
            }

.. _tsSearchFields:

::

