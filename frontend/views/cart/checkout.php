<div class="main-container col1-layout">
    <div class="main container">
        <div class="col-main">            
            <div class="opc-wrapper-opc design_package_smartwave design_theme_porto">
                <div class="page-title">
                    <h1>Checkout</h1>
                </div>
                <div class="clear"></div>
                <div>
                    <div class="opc-col-left">
                        <form id="opc-address-form-shipping" method="post">
                            <div>	
                                <h3>Shipping Address</h3>
                                <ul class="form-list">
                                    <li id="shipping-new-address-form">
                                        <fieldset>
                                            <input type="hidden" name="shipping[address_id]" value="42626" id="shipping:address_id">
                                            <ul>
                                                <li class="fields">
                                                    <div class="fields">
                                                        <label for="shipping:firstname" class="required"><em>*</em>First Name</label>
                                                        <div class="input-box">
                                                            <input type="text" id="shipping:firstname" name="shipping[firstname]" value="" title="First Name" maxlength="255" class="input-text required-entry">
                                                        </div>                                                        
                                                    </div>
                                                </li>
                                                <div class="clear"></div>
                                                <li class="fields">
                                                    <div class="fields">
                                                        <label for="shipping:company">Company</label>
                                                        <div class="input-box">
                                                            <input type="text" id="shipping:company" name="shipping[company]" value="" title="Company" class="input-text ">
                                                        </div>
                                                    </div>
                                                </li>
                                                <div class="clear"></div>
                                                <li class="wide">
                                                    <label for="shipping:street1" class="required"><em>*</em>Address</label>
                                                    <div class="input-box">
                                                        <input type="text" title="Street Address" name="shipping[street][]" id="shipping:street1" value="" class="input-text  required-entry">
                                                    </div>
                                                </li>
                                                <li class="wide">
                                                    <div class="input-box">
                                                        <input type="text" title="Street Address 2" name="shipping[street][]" id="shipping:street2" value="" class="input-text ">
                                                    </div>
                                                </li>
                                            </ul>
                                        </fieldset>
                                    </li>
                                    <li class="control hidden">
                                        <input type="checkbox" name="shipping[same_as_billing]" id="shipping:same_as_billing" value="1" checked="checked" title="Use Billing Address" class="checkbox"><label for="shipping:same_as_billing">Use Billing Address</label>
                                    </li>
                                </ul>
                            </div>        
                        </form>
                    </div>                   
                </div>
            </div>                
        </div>
    </div>
</div>