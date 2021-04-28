<!DOCTYPE html>
<html>
    <head>
        <title>SHARE STATEMENTS</title>
        
        <style>
            body{
                background-color: white;
            }
            table{
                margin-bottom: 0rem !important;
            }
            #table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

            #table td, #table th {
            border: 1px solid #ddd;
            padding: 8px;
            }

            #table tr:nth-child(even){background-color: #f2f2f2;}

            #table tr:hover {background-color: #ddd;}

            #table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color:#3075ff;
            color: white;
            }
        </style>
    </head>
    <body>
        <img width="100%" src="{{ public_path('img/header.jpg') }}">
        <br><br>
        <table width="100%" align="center">
            <tr>
                <td width="60%"></td>
                <th width="20%"align="left">Name</th>
                <td width="20%"align="left">{{ucwords(strtolower($customer->name))}}</td>
            </tr>
            <tr>
                <td width="60%"></td>
                <th width="20%"align="left">Membership No</th>
                <td width="20%"align="left">{{$customer->ref_no}}</td>
            </tr>
            <tr>
                <td></td>
                <th align="left">Total Share(RM)</th>
                <td align="left">{{number_format($customer->total_share,2,".",",")}}</td>
            </tr>
        </table>
        <br>
        <h4><center>STATEMENTS - SHARE </center></h4>
        <br>
        <table width="100%" align="center" id="table">
            <tr>
                <th width="15%" align="center"><b>Date</b></th>
                <th width="50%" align="left"><b>Details</b></th>
                <th width="15%" align="right"><b>Amount</b></th>
                <th width="20%" align="right"><b>Total</b></th>
            </tr>
            @forelse ($statements as $item)
            <tr>
                <td align="center">{{$item->date}}</td>
                <td align="left">{{$item->detail->description}}</td>
                <td align="right">{{number_format($item->amount,2,".",",")}}</td>
                <td align="right">{{number_format($item->total_amount,2,".",",")}}</td>
            </tr>
            @empty @endforelse
        </table>
        <p style="
            font-size: 10px;
            color: silver;
            text-align: center;
            position: fixed;
            bottom: -60px;
            left: 0px;
            right: 0px;
            height: 50px;
            ">This Document is Computer Generated</p>
    </body>
</html>
