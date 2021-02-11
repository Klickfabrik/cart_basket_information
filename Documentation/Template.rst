.. include:: /Includes.rst.txt

============
Template
============

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
