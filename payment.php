<?php
require 'vendor/autoload.php';
?>
<style>
        /* Custom styles to center the modal */
        .modal-dialog {
            margin: 0 auto;
            position: relative;
            top: 30%;
            transform: translateY(-50%);
        }
    </style>
<section class="about-v2">
    <div class="container">
        <?php if ($error_message): ?>
            <div>
                <p class="text-danger">
                    <?php echo $error_message; ?>
                </p>
            </div>
        <?php endif; ?>
        <form class="form-horizontal" action="<?php echo BASE_URL; ?>confirm" method="post" id="payment-form">
            <div class="form-group">
                <label for="customerName" class="col-sm-2 control-label">Customer Name<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input required type="text" name="customerName" class="form-control" id="customerName" value="" placeholder="Customer Name">
                </div>
            </div>
            <div class="form-group">
                <label for="customerEmail" class="col-sm-2 control-label">Customer Email<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input required type="email" name="customerEmail" class="form-control" id="customerEmail" value="" placeholder="Customer Email">
                </div>
            </div>
            <div class="form-group">
                <label for="customerAddress" class="col-sm-2 control-label">Customer Address<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input required type="text" name="customerAddress" class="form-control" id="customerAddress" value="" placeholder="Customer Address">
                </div>
            </div>
            <div class="form-group">
                <label for="invoiceNo" class="col-sm-2 control-label">Invoice No.<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input required type="text" name="invoiceNo" class="form-control" id="invoiceNo" value="" placeholder="Invoice No.">
                </div>
            </div>
            <div class="form-group">
                <label for="amount" class="col-sm-2 control-label">Invoice Amount<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input required type="text" name="amount"  class="form-control" id="gross_amount"  placeholder="Amount">
                </div>
            </div>
            
            <input type="hidden" name="gross_amount" id="hidden_amount"/>
            <input type="hidden" name="to_confirmation" value="yes"/>
            <div class="form-group">
                <label for="paymentNote" class="col-sm-2 control-label">Payment Note:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="paymentNote" id="paymentNote" rows="4" placeholder="Payment Note"></textarea>
                </div>
            </div>
         
            <div class="col text-center">
                <button type="submit" style="display:none" name="payment_form" class="btn btn-primary">Pay Now</button>
                <button type="submit" class="btn btn-primary" data-toggle="" data-target=""> Pay Now</button>
            </div>
        </form>
  
    <!-- Button to trigger modal -->
   

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Payment Confirm</h4>
                </div>
                <div class="modal-body">
                <span>Invoice Amount ($): <strong id="invoice_amount">0.00</strong></span>
                <br>
                <span>Service Charge ($): <strong id="service_charge">0.00</strong></span>
                <br>
                <span>Total Payable ($): <strong id="total_payable_display">0.00</strong></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" id="submitPayment" class="btn btn-primary">Pay Now</button>
                </div>
            </div>
        </div>
    </div>

    </div>
</section>

