        <ul id="side-main-menu" class="side-menu list-unstyled">
            <li><a href="{{url('/dashboard')}}"> <i class="dripicons-meter"></i><span>{{ __('file.dashboard') }}</span></a></li>
            <style>
                .side-menu  li:hover > a{
                    background: rgba(4, 128, 185, 0.904);
                    color:#fff !important;
                }
                .side-menu  li:hover i::before{
                    color:#fff !important;
                }
                .side-navbar{
                    background: #dddddd;
                }
                .side-menu  li a{
                    font-size: 18px;
                }
                .side-menu  li  ul li a{
                    font-size: 18px;
                }
            </style>
            <?php

                $index_permission_active = $role_has_permissions_list->where('name', 'products-index')->first();

                $category_permission_active = $role_has_permissions_list->where('name', 'category')->first();

                $print_barcode_active = $role_has_permissions_list->where('name', 'print_barcode')->first();

                $stock_count_active = $role_has_permissions_list->where('name', 'stock_count')->first();

                $adjustment_active = $role_has_permissions_list->where('name', 'adjustment')->first();
            ?>
            @if($category_permission_active || $index_permission_active || $print_barcode_active || $stock_count_active || $adjustment_active)
            <li><a href="#product" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-list"></i><span>{{__('file.product')}}</span><span></a>
            <ul id="product" class="collapse list-unstyled ">
                @if($category_permission_active)
                <li id="category-menu"><a href="{{route('category.index')}}">{{__('file.category')}}</a></li>
                @endif
                @if($index_permission_active)
                <li id="product-list-menu"><a href="{{route('products.index')}}">{{__('file.product_list')}}</a></li>
                <?php
                    $add_permission_active = $role_has_permissions_list->where('name', 'products-add')->first();
                ?>
                @if($add_permission_active)
                <li id="product-create-menu"><a href="{{route('products.create')}}">{{__('file.add_product')}}</a></li>
                @endif
                @endif
                {{-- @if($print_barcode_active)
                <li id="printBarcode-menu"><a href="{{route('product.printBarcode')}}">{{__('file.print_barcode')}}</a></li>
                @endif --}}
                {{-- @if($adjustment_active)
                <li id="adjustment-list-menu"><a href="{{route('qty_adjustment.index')}}">{{trans('file.Adjustment List')}}</a></li>
                <li id="adjustment-create-menu"><a href="{{route('qty_adjustment.create')}}">{{trans('file.Add Adjustment')}}</a></li>
                @endif --}}
                {{-- @if($stock_count_active)
                <li id="stock-count-menu"><a href="{{route('stock-count.index')}}">{{trans('file.Stock Count')}}</a></li>
                @endif --}}
            </ul>
            </li>
            @endif
            <?php
                $index_permission_active = $role_has_permissions_list->where('name', 'purchases-index')->first();
            ?>
            @if($index_permission_active)
            <li><a href="#purchase" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-card"></i><span>{{trans('file.Purchase')}}</span></a>
            <ul id="purchase" class="collapse list-unstyled ">
                <li id="purchase-list-menu"><a href="{{route('purchases.index')}}">{{trans('file.Purchase List')}}</a></li>
                <?php
                $add_permission_active = $role_has_permissions_list->where('name', 'purchases-add')->first();
                ?>
                @if($add_permission_active)
                <li id="purchase-create-menu"><a href="{{route('purchases.create')}}">{{trans('file.Add Purchase')}}</a></li>
                @endif
            </ul>
            </li>
            @endif
            <?php
                $sale_index_permission_active = $role_has_permissions_list->where('name', 'sales-index')->first();
        
                $gift_card_permission_active = $role_has_permissions_list->where('name', 'gift_card')->first();
        
                $coupon_permission_active = $role_has_permissions_list->where('name', 'coupon')->first();

                $delivery_permission_active = $role_has_permissions_list->where('name', 'delivery')->first();

                $sale_add_permission_active = $role_has_permissions_list->where('name', 'sales-add')->first();
            ?>
            @if($sale_index_permission_active || $gift_card_permission_active || $coupon_permission_active || $delivery_permission_active)
            <li><a href="#sale" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-cart"></i><span>{{trans('file.Sale')}}</span></a>
            <ul id="sale" class="collapse list-unstyled ">
                @if($sale_add_permission_active)
                <li id="sale-list-menu"><a href="{{route('sales.index')}}">{{trans('file.Sale List')}}</a></li>
                <li><a href="{{route('sale.pos')}}">POS</a></li>
                <li id="sale-create-menu"><a href="{{route('sales.create')}}">{{trans('file.Add Sale')}}</a></li>
                @endif
            </ul>
            </li>
            @endif

      
            {{-- <?php
            $index_permission_active = $role_has_permissions_list->where('name', 'transfers-index')->first();
            ?>
            @if($index_permission_active)
            <li><a href="#transfer" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-export"></i><span>{{trans('file.Transfer')}}</span></a>
            <ul id="transfer" class="collapse list-unstyled ">
                <li id="transfer-list-menu"><a href="{{route('transfers.index')}}">{{trans('file.Transfer List')}}</a></li>
                <?php
                $add_permission_active = $role_has_permissions_list->where('name', 'transfers-add')->first();
                ?>
                @if($add_permission_active)
                <li id="transfer-create-menu"><a href="{{route('transfers.create')}}">{{trans('file.Add Transfer')}}</a></li>
                <li id="transfer-import-menu"><a href="{{url('transfers/transfer_by_csv')}}">{{trans('file.Import Transfer By CSV')}}</a></li>
                @endif
            </ul>
            </li>
            @endif --}}

            <?php
                $sale_return_index_permission_active = $role_has_permissions_list->where('name', 'returns-index')->first();

                $purchase_return_index_permission_active = $role_has_permissions_list->where('name', 'purchase-return-index')->first();
            ?>
        
            {{-- <?php
            $index_permission_active = $role_has_permissions_list->where('name', 'account-index')->first();

            $money_transfer_permission_active = $role_has_permissions_list->where('name', 'money-transfer')->first();

            $balance_sheet_permission_active = $role_has_permissions_list->where('name', 'balance-sheet')->first();

            $account_statement_permission_active = $role_has_permissions_list->where('name', 'account-statement')->first();

            ?> --}}
            {{-- @if($index_permission_active || $balance_sheet_permission_active || $account_statement_permission_active || $money_transfer_permission_active)
            <li class=""><a href="#account" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-briefcase"></i><span>{{trans('file.Accounting')}}</span></a>
            <ul id="account" class="collapse list-unstyled ">
                @if($index_permission_active)
                <li id="account-list-menu"><a href="{{route('accounts.index')}}">{{trans('file.Account List')}}</a></li>
                <li><a id="add-account" href="">{{trans('file.Add Account')}}</a></li>
                @endif
                @if($money_transfer_permission_active)
                <li id="money-transfer-menu"><a href="{{route('money-transfers.index')}}">{{trans('file.Money Transfer')}}</a></li>
                @endif
                @if($balance_sheet_permission_active)
                <li id="balance-sheet-menu"><a href="{{route('accounts.balancesheet')}}">{{trans('file.Balance Sheet')}}</a></li>
                @endif
                @if($account_statement_permission_active)
                <li id="account-statement-menu"><a id="account-statement" href="">{{trans('file.Account Statement')}}</a></li>
                @endif
            </ul>
            </li>
            @endif --}}
            <?php
                $department_active = $role_has_permissions_list->where('name', 'department')->first();
                
                $index_employee_active = $role_has_permissions_list->where('name', 'employees-index')->first();
                
                $attendance_active = $role_has_permissions_list->where('name', 'attendance')->first();
                
                $payroll_active = $role_has_permissions_list->where('name', 'payroll')->first();

                $holiday_active = $role_has_permissions_list->where('name', 'holiday')->first();
            ?>

             
            <?php

                $user_index_permission_active = $role_has_permissions_list->where('name', 'users-index')->first();

                $customer_index_permission_active = $role_has_permissions_list->where('name', 'customers-index')->first();

                $biller_index_permission_active = $role_has_permissions_list->where('name', 'billers-index')->first();
                    
                $supplier_index_permission_active = $role_has_permissions_list->where('name', 'suppliers-index')->first();
                    
            ?>
            @if($user_index_permission_active || $customer_index_permission_active || $biller_index_permission_active || $supplier_index_permission_active)
            <li><a href="#people" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-user"></i><span>{{trans('file.People')}}</span></a>
            <ul id="people" class="collapse list-unstyled ">

                @if($user_index_permission_active)
                <li id="user-list-menu"><a href="{{route('user.index')}}">{{trans('file.User List')}}</a></li>
                <?php
                    $user_add_permission_active = $role_has_permissions_list->where('name', 'users-add')->first();
                ?>
                @if($user_add_permission_active)
                <li id="user-create-menu"><a href="{{route('user.create')}}">{{trans('file.Add User')}}</a></li>
                @endif
                @endif

                @if($customer_index_permission_active)
                <li id="customer-list-menu"><a href="{{route('customer.index')}}">{{trans('file.Customer List')}}</a></li>
                <?php
                    $customer_add_permission_active = $role_has_permissions_list->where('name', 'customers-add')->first();
                ?>
                @if($customer_add_permission_active)
                <li id="customer-create-menu"><a href="{{route('customer.create')}}">{{trans('file.Add Customer')}}</a></li>
                @endif
                @endif

                @if($biller_index_permission_active)
                <li id="biller-list-menu"><a href="{{route('biller.index')}}">{{trans('file.Biller List')}}</a></li>
                <?php
                    $biller_add_permission_active = $role_has_permissions_list->where('name', 'billers-add')->first();
                ?>
                @if($biller_add_permission_active)
                <li id="biller-create-menu"><a href="{{route('biller.create')}}">{{trans('file.Add Biller')}}</a></li>
                @endif
                @endif

                @if($supplier_index_permission_active)
                <li id="supplier-list-menu"><a href="{{route('supplier.index')}}">{{trans('file.Supplier List')}}</a></li>
                <?php
                    $supplier_add_permission_active = $role_has_permissions_list->where('name', 'suppliers-add')->first();
                ?>
                @if($supplier_add_permission_active)
                <li id="supplier-create-menu"><a href="{{route('supplier.create')}}">{{trans('file.Add Supplier')}}</a></li>
                @endif
                @endif
            </ul>
            </li>
            @endif
