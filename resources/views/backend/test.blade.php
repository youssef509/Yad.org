<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PayPal Payment Test</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Test PayPal Payment</h2>
        <form method="POST" action="{{ route('paypal.pay') }}">
            @csrf
            <!-- Amount and Currency Input -->
            <div class="form-group">
                <label for="amount">Amount</label>
                <input  id="amount" name="amount" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="currency">Currency</label>
                <select id="currency" name="currency" class="form-control">
                    <option value="USD">USD</option>
                    <option value="EUR">EUR</option>
                </select>
            </div>
        
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Pay with PayPal</button>
        </form>
        
    </div>
</body>
</html>

