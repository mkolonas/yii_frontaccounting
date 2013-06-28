<?php

class ModuleMenu
{
    public static function getExtendedMenu() {
        return array(
            array(
                'label' => 'Sales & Cust.',
                'url' => array('#'),
                'submenuHtmlOptions' => array('class' => 'dropdown-menu'),
                'itemOptions' => array('class' => 'dropdown'),
                'linkOptions' => array('class' => 'dropdown-toggle','data-toggle'=>"dropdown"),
                'items' => array(
                    array('label' => 'Sales Quotation', 'url' => array('salesQuotation/admin')),
                    array('label' => 'Sales Order', 'url' => array('salesOrder/admin')),
                    array('label' => 'Sales Transaction', 'url' => array('salesTransaction/admin')),
                    array('label' => '- Direct Delivery', 'url' => array('directDelivery/admin')),
                    array('label' => '- Direct Invoice', 'url' => array('directInvoice/admin')),
                    array('label' => '- Delivery vs Sales Order', 'url' => array('deliveryVsSalesOrder/admin')),
                    array('label' => '- Invoice vs Sales Delivery', 'url' => array('invoiceVsSalesDelivery/admin')),
                    array('label' => 'Sales Group', 'url' => array('salesGroup/admin')),
                    array('label' => 'Sales Type', 'url' => array('salesType/admin')),
                    array('label' => 'Sales Person', 'url' => array('salesPerson/admin')),
                    array('label' => 'Sales Price', 'url' => array('salesPrice/admin')),
                    array('label' => 'Customer Head Info', 'url' => array('customerHeadInformation/admin')),
                    array('label' => 'Customer Branch Info', 'url' => array('customerBranchInformation/admin')),
                    array('label' => 'Customer Branch Account', 'url' => array('customerBranchAccount/admin')),
                )
            ),
            array(
                'label' => 'Purch. & Supp.',
                'url' => array('#'),
                'itemOptions' => array('class' => 'dropdown'),
                'linkOptions' => array('class' => 'dropdown-toggle','data-toggle'=>"dropdown"),
                'items' => array(
                    array('label' => '- Allocate Supplier Payment or Credit Note', 'url' => array('allocateSupplierPaymentOrCreditNote/admin')),
                    array('label' => '- Supplier Credit Note', 'url' => array('supplierCreditNote/admin')),
                    array('label' => '- Supplier Invoice', 'url' => array('supplierInvoice/admin')),
                    array('label' => 'Purchase Price', 'url' => array('purchasePrice/admin')),
                    array('label' => '- Purchase Order', 'url' => array('purchaseOrder/admin')),
                    array('label' => 'Supplier Info', 'url' => array('supplierInformation/admin')),
                    array('label' => 'Supplier Account', 'url' => array('supplierAccount/admin')),
                    array('label' => '- Supplier Transaction', 'url' => array('supplierTransaction/admin')),
                    array('label' => '- Supplier Purchase Order', 'url' => array('supplierPurchaseOrder/admin')),
                    array('label' => '- Supplier Payment', 'url' => array('supplierPayment/admin')),
                    array('label' => '- Supplier Allocation', 'url' => array('supplierAllocation/admin')),
                )
            ),
            array(
                'label' => 'Item & Inv.',
                'url' => array('#'),
                'itemOptions' => array('class' => 'dropdown'),
                'linkOptions' => array('class' => 'dropdown-toggle','data-toggle'=>"dropdown"),
                'items' => array(
                    array('label' => '###', 'url' => '#'),
                    array('label' => '###', 'url' => '#'),
                    array('label' => '###', 'url' => '#'),
                    array('label' => '###', 'url' => '#'),
                    array('label' => 'Item Info', 'url' => array('itemInformation/admin')),
                    array('label' => 'Item Account', 'url' => array('itemAccount/admin')),
                    array('label' => 'Item Cost', 'url' => array('itemCost/admin')),
                    array('label' => '- Item Transaction', 'url' => array('itemTransaction/admin')),
                    array('label' => '- Item Status', 'url' => array('itemStatus/admin')),
                    array('label' => 'Item Category Info', 'url' => array('itemCategoryInformation/admin')),
                    array('label' => 'Item Category Account', 'url' => array('itemCategoryAccount/admin')),
                    array('label' => '- Sales Kit', 'url' => array('salesKit/admin')),
                    array('label' => 'Inventory Location', 'url' => array('inventoryLocation/admin')),
                    array('label' => 'Sales Price', 'url' => array('salesPrice/admin')),
                    array('label' => 'Purchase Price', 'url' => array('purchasePrice/admin')),
                )
            ),
            array(
                'label' => 'Manufacture',
                'url' => array('#'),
                'itemOptions' => array('class' => 'dropdown'),
                'linkOptions' => array('class' => 'dropdown-toggle','data-toggle'=>"dropdown"),
                'items' => array(
                    array('label' => '###', 'url' => '#'),
                    array('label' => '###', 'url' => '#'),
                    array('label' => '###', 'url' => '#',
                        'itemOptions' => array('class' => 'dropdown-submenu','tabindex'=>"-1"),
                        'linkOptions' => array('class' => 'dropdown-toggle','data-toggle'=>"dropdown"),
                        'items' => array(
                            array('label' => '###', 'url' => '#'),
                            array('label' => '###', 'url' => '#'),
                            array('label' => '###', 'url' => '#'),
                        ),
                    ),
                    array('label' => '###', 'url' => '#'),
                    array('label' => '###', 'url' => '#'),
                ),
            ),
            array(
                'label' => 'Bank & GL',
                'url' => array('#'),
                'itemOptions' => array('class' => 'dropdown'),
                'linkOptions' => array('class' => 'dropdown-toggle','data-toggle'=>"dropdown"),
                'items' => array(
                    array('label' => 'Bank Account', 'url' => array('bankAccount/admin')),
                    array('label' => '###', 'url' => '#'),
                    array('label' => 'Quick Entry', 'url' => array('quickEntry/admin')),
                    array('label' => 'Quick Entry Line', 'url' => array('quickEntryLine/admin')),
                    array('label' => 'General Ledger Account', 'url' => array('generalLedgerAccount/admin')),
                    array('label' => 'GL Account Tag', 'url' => array('generalLedgerAccountTag/admin')),
                    array('label' => 'GL Account Type', 'url' => array('generalLedgerAccountType/admin')),
                    array('label' => 'GL Account Class', 'url' => array('generalLedgerAccountClass/admin')),
                ),
            ),
            array(
                'label' => 'Misc',
                'url' => array('#'),
                'itemOptions' => array('class' => 'dropdown'),
                'linkOptions' => array('class' => 'dropdown-toggle','data-toggle'=>"dropdown"),
                'items' => array(
                    array('label' => 'Area', 'url' => array('area/admin')),
                    array('label' => 'Measure Unit', 'url' => array('measureUnit/admin')),
                    array('label' => 'Workcenter', 'url' => array('workcenter/admin')),
                    array('label' => 'Dimension', 'url' => array('dimension/admin')),
                    array('label' => 'Dimension Tag', 'url' => array('dimensionTag/admin')),
                    array('label' => 'Currency', 'url' => array('currency/admin')),
                    array('label' => 'Exchange Rate', 'url' => array('exchangeRate/admin')),
                    array('label' => 'Shipping Company', 'url' => array('shippingCompany/admin')),
                    array('label' => 'Payment Term', 'url' => array('paymentTerm/admin')),
                    array('label' => 'Contact Category', 'url' => array('contactCategory/admin')),
                    array('label' => 'Tax Group', 'url' => array('taxGroup/admin')),
                    array('label' => 'Tax Type', 'url' => array('taxType/admin')),
                    array('label' => 'Tax Type Item', 'url' => array('taxTypeItem/admin')),
                    array('label' => 'Fiscal Year', 'url' => array('fiscalYear/admin')),
                    array('label' => 'Attachment', 'url' => array('attachment/admin')),
                    array('label' => 'Form', 'url' => array('form/admin')),
                ),
            ),
        );
    }

    public static function getMainMenu() {
        return array();
    }

    public static function getUserMenu() {
        return array(
            array('label' => 'help', 'url' => array('default/help'), 'visible' => Yii::app()->user->id == 1),
        );
    }
}
?>
