
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Example 1</title>
    <link rel="stylesheet"  media="all" />
    <style>
        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }
        a {
            color: #5D6975;
            text-decoration: underline;
        }
        body {
            position: relative;
            width: 21cm;
            height: 29.7cm;
            margin: 0 auto;
            color: #001028;

            background: #f1f1f1;
            font-family: Arial, sans-serif;
            font-size: 16px;
        }
        header {
            padding: 50px 0;
            margin-bottom: 30px;
        }
        #logo {
            text-align: center;
            margin-bottom: 10px;
        }
        #logo img {
            width: 90px;
        }
        h1 {
            border-top: 1px solid  #5D6975;
            border-bottom: 1px solid  #5D6975;
            color: #5D6975;
            font-size: 2.4em;
            line-height: 1.4em;
            font-weight: normal;
            text-align: center;
            margin: 0 0 20px 0;
            background: url(dimension.png);
        }

        #project {
            float: left;
        }

        #project span {
            color: #5D6975;
            text-align: right;
            width: 52px;
            margin-right: 10px;
            display: inline-block;
            font-size: 0.8em;
        }

        #company {
            float: right;
            text-align: right;
        }

        #project div,
        #company div {
            white-space: nowrap;
            padding: 6px;

        }
        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px;
        }

        table tr:nth-child(2n-1) td {
            background: #F5F5F5;
        }

        table th,
        table td {
            text-align: center;
        }

        table th {
            padding: 5px 20px;
            color: #5D6975;
            border-bottom: 1px solid #C1CED9;
            white-space: nowrap;
            font-weight: normal;
        }

        table .service,
        table .desc {
            text-align: left;
        }

        table td {
            padding: 20px;
            text-align: right;
        }

        table td.service,
        table td.desc {
            vertical-align: top;
        }
        table td.unit,
        table td.qty,
        table td.total {
            font-size: 1.2em;
        }

        table td.grand {
            border-top: 1px solid #5D6975;;
        }

        table td.grand {
            border-top: 1px solid #5D6975;;
        }
        #notices .notice {
            color: #5D6975;
            font-size: 1.2em;
        }
        footer {
            color: #5D6975;
            width: 100%;
            height: 30px;
            position: absolute;
            bottom: 0;
            border-top: 1px solid #C1CED9;
            padding: 8px 0;
            text-align: center;
        }
    </style>
</head>
<body>
<header class="clearfix">
    <div id="logo">

    </div>
    <h1>INVOICE</h1>
    <div id="company" class="clearfix">
        <div>Company Name</div>
        <div>Shop Plus<br />Việt Nam</div>
        <div>(602) 519-0450</div>
        <div><a href="mailto:company@example.com">shoplus@gmail.com</a></div>
    </div>
    <div id="project">
        <div><span>PROJECT</span> SHOP PLUS</div>

        <div><span>CLIENT</span> {{$customer->name}}</div>
        <div><span>ADDRESS</span> {{$customer->address}}</div>
        <div><span>EMAIL</span> <a href="mailto:{{$customer->email}}">{{$customer->email}}</a></div>
        <div><span>DATE</span> {{$bill->date_order}}</div>
    </div>
</header>
<main>
    <table>
        <thead>
        <tr>
            <th class="service">SERVICE</th>
            <th class="desc">DESCRIPTION</th>
            <th>PRICE</th>
            <th>QTY</th>
            <th>TOTAL</th>
        </tr>
        </thead>
        <tbody>
        @foreach(session('cart') as $id => $details)
        <tr>
            <td class="service">{{ $details['name'] }}</td>
            <td class="desc">{{$bill->note}}</td>
            <td class="unit">{{number_format($details['price'])}}</td>
            <td class="qty">{{$details['quantity']}}</td>
            <td class="total">${{ number_format($details['price'] * $details['quantity'])}} </td>
        </tr>
        @endforeach
        <tr>
            <td colspan="4">TOTAL</td>
            <td class="total">${{ number_format($bill->total)}}</td>
        </tr>
        </tbody>
    </table>
    <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
    </div>
    <br>
    <a style="color:blue; font-size: 15px" href="{{url('/')}}">Quay lại mua sắm</a>
</main>
<footer>
    Invoice was created on a computer and is valid without the signature and seal.
</footer>

<?php
session()->forget('cart');
?>

</body>
</html>
