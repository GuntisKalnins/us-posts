<h5 class="row justify-content-center" id="bottom">Donate $2,50</h5>
<div class="row justify-content-center" id="paypal-button-container"></div>

<div class="row justify-content-center">
    <p><a class="m-3" href="/terms">Terms of Use</a></p>
    <p><a class="m-3" href="/privacy">Privacy Policy</a></p>
</div> 
<div class="d-inline text-center">
    <p class="m-0">Content copyright © 2000-2020</p>
    <p class="m-0">All rights reserved.</p>    
</div>
    

@section('scripts')
    <script>
    paypal.Buttons({
        createOrder: function(data, actions) {
        // This function sets up the details of the transaction, including the amount and line item details.
        return actions.order.create({
            purchase_units: [{
            amount: {
                value: '2.50'
            }
            }]
        });
        },
        onApprove: function(data, actions) {
        // This function captures the funds from the transaction.
        return actions.order.capture().then(function(details) {
            // This function shows a transaction success message to your buyer.
            alert('Thank you for donation ' + details.payer.name.given_name);
        });
        }
    }).render('#paypal-button-container');
    //This function displays Smart Payment Buttons on your web page.
    </script>
@endsection
