<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        * { font-family: 'DejaVu Sans, sans-serif';}
        p, td {
            font-size: 12px;
            line-height: 12px;
        }
        p {
            margin: 0;
        }
        h4, th {
            font-size: 13px;
        }
    </style>
</head>
<body>

    <section style="width: 100%; display: inline-block; max-width: 1100px;">
        <div style="width: 100%; display: inline-block; border-bottom: 1px solid #000; padding-bottom: 40px; height : 150px;">
            <div style="width: 50%; float: left; padding-top: 20px;">
                <img src="{{ public_path('assets/images/clocare-logo-original.png') }}" alt="" width="270px;">
            </div>
            <div style="width: 50%; float: left; text-align: right;">
                <h1>INVOICE</h1>
                <h4 style="margin-bottom: 0;">Clocare Venture Pvt Ltd</h4>
                <p style="margin: 0;">8, Shiv-Shakti Complex,</p>
                <p style="margin: 0;">Makrand Desai Rd, Harinagar</p>
                <p style="margin: 0;">Vadodara, Gujarat</p>
                <p style="margin: 0;">390007</p>
            </div>
        </div>

        <div style="width: 100%; display: inline-block; padding-bottom: 40px; height : 80px;">
            <div style="width: 50%; float: left;">
                <h4 style="margin-bottom: 0;">{{ $customer_name }}</h4>
                <p>{!! nl2br(e($customer_address)) !!}</p>
            </div>
            <div style="width: 50%; float: right; text-align: right; ">
                <h4 style="margin-bottom: 0;">Invoice Number : <span style="font-weight: normal;">{{ $invoice_no }}</span></h4>
                <h4 style="margin: 0;">Date : <span style="font-weight: normal;">{{ $date }}</span></h4>
            </div>
        </div>

        <div style="width: 100%; display: inline-block; padding-bottom: 18px; border-bottom: 1px solid #000; margin-bottom: 15px;">
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <th style="text-align: left; width: 70%; border-bottom: 1px solid #000;">Products</th>
                    <th style="text-align: center; border-bottom: 1px solid #000;">Quantity</th>
                    <th style="text-align: center; border-bottom: 1px solid #000;">Price</th>
                    <th style="text-align: center; border-bottom: 1px solid #000;">Total</th>
                </thead>
                <tbody>
                    @php
                        $subtotal = 0;
                    @endphp
                    @foreach ($product_name as $key => $product)
                    <tr>
                        <td>{{$product}}</td>
                        <td style="text-align: center;">{{ $quantity[$key] }}</td>
                        <td style="text-align: center;">&#8377;{{ number_format($price[$key], 2) }}</td>
                        <td style="text-align: center;">&#8377;{{ number_format(($quantity[$key] * $price[$key]), 2) }}</td>
                    </tr>
                        @php
                            $subtotal += ($quantity[$key] * $price[$key]);
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>

        <div style="width: 100%; display: inline-block;">
            <div style="width: 70%; float: left; display: block">
            </div>
            <div style="width: 30%; float: right; text-align: right; ">
                <table style="width: 100%; border-collapse: collapse;">
                    <tbody>
                        <tr>
                            <th style="width: 70%; text-align: right">Subtotal:</th>
                            <td style="text-align: right;">&#8377;{{ number_format($subtotal, 2)}}</td>
                        </tr><tr>
                            <th style="width: 70%; text-align: right">Discount:</th>
                            <td style="text-align: right;">&#8377;{{$tax = number_format($discount, 2)}}</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <table style="width: 100%; border-collapse: collapse;">
                    <tbody>
                        <tr>
                            <th style="width: 70%; text-align: right">Total</th>
                            <td style="text-align: right;">&#8377;{{number_format(($subtotal - $discount), 2)}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </section>



</body>
</html>
