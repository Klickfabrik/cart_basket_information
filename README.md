# cart_basket_information

File: ProductList.html

    <f:if condition="{product.additionalArray.details}">
        <div class="content--categorie">
            <f:for each="{product.additionalArray.details.tags}" as="tag" iteration="iterator">
                <h4>{tag.title}</h4>
            </f:for>
        </div>
    </f:if>
    <f:if condition="{product.additionalArray.details}">
        <div class="content--teaser d-none">
            <f:format.raw>{product.additionalArray.details.teaser}</f:format.raw>
        </div>
    </f:if>
