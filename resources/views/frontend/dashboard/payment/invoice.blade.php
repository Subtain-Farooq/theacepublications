<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aloha!</title>

    <style type="text/css">
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        table{
            font-size: x-small;
        }
        tfoot tr td{
            font-weight: bold;
            font-size: x-small;
        }
        .gray {
            background-color: lightgray
        }
    </style>

</head>
<body>

<table width="100%">
    <tr>
        <td valign="top"><img src="{{asset('images/logo/logo6.png')}}" alt="" width="65"/></td>
        <td align="right">
            <h1 style="color: #003C7B; margin-bottom: 0px;">THE ACE PUBLICATIONS</h1>

            <p style="line-height: 20px; margin-top: 3px;">
                <i> Office No. 29-B, Creek Tower Baniyas Road, Dubai, UAE</i><br>
                acepublicationsdxb@gmail.com<br>
                +(971) 56-386-0507
            </p>
        </td>
    </tr>

</table>

<h4 style="margin-bottom: 4px; margin-top: 1px;">Billing Address:</h4>
<table width="100%" style="background-color: #E7E7E7">
    <tr>
        <td>
            <div style="padding: 15px;">
                <b>{{ Auth::user()->name }}</b><br>
                <address style="padding-top: 6px;">Office No. 29-B, Creek Tower, Baniyas Road, Dubai, UAE</address>
            </div>
        </td>
    </tr>

</table>

<table width="100%" style="padding-top: 15px; border-collapse: collapse; border-radius: 3px;">
    <tr>
        <td width="20%" style="background-color: #B6B6B6; padding: 8px;">Invoice Number</td>
        <td width="30%" style="background-color: #E7E7E7; padding: 8px;">{{ $invoice->invoice_number }}</td>
        <td width="20%" style="background-color: #B6B6B6; padding: 8px;">Generated Date</td>
        <td width="30%" style="background-color: #E7E7E7; padding: 8px;">{{ $invoice->generated_at->format('d M Y') }}</td>
    </tr>

</table>

<br/>

<table width="100%" style="border: 1px solid gray; border-collapse: collapse;">
    <thead style="">
    <tr>
        <th width="80%" style="padding: 12px;">Description</th>
        <th width="20%" style="padding: 12px;">Amount</th>
    </tr>
    </thead>
    <tbody>
    @if($invoice->amount == 350)
    <tr style="">
        <td width="80%" style="padding: 8px; text-align: left; border: 1px solid gray;">Standard printing cost of Article No. <b>{{ $invoice->manuscript->code }}</b> entitled "{{ $invoice->manuscript->title }}" for online publication.</td>
        <td width="20%" style="padding: 8px; text-align: left; border: 1px solid gray;">$350</td>
    </tr>
    @elseif($invoice->amount == 500)
        <tr style="">
            <td width="80%" style="padding: 8px; text-align: left; border: 1px solid gray;">Standard printing cost of Article No. <b>{{ $invoice->manuscript->code }}</b> entitled "{{ $invoice->manuscript->title }}" for inline publication.</td>
            <td width="20%" style="padding: 8px; text-align: left; border: 1px solid gray;">$350</td>
        </tr>
    <tr style="">
        <td width="80%" style="padding: 8px; text-align: left; border: 1px solid gray;">Extra cost of  (Hard Copy + Reprints + Delivery charges)</td>
        <td width="20%" style="padding: 8px; text-align: left; border: 1px solid gray;">$150</td>
    </tr>
    @endif
    <tr style="">
        <td width="80%" style="padding: 8px; text-align: center; border: 1px solid gray;">Total</td>
        <td width="20%" style="padding: 8px; text-align: left; border: 1px solid gray;">${{ $invoice->amount }}</td>
    </tr>
    </tbody>

</table>

<div style="
    position: fixed;
    padding-top: 50%;
   width: 100%;"
>
    <h4 style="margin-bottom: 4px;">Payment Methods:</h4>


    {{--<table width="100%">
        <tr>
            <td>
                <h4 style="margin-bottom: 8px;">Pay via Cash Express</h4>
                <div style="margin-bottom: 5px;">
                    <label style="width: 25%; display: inline-block">Receiver Name:</label>
                    <p style="width: 75%; display: inline;">Sherjeel Ahmed Muhammad Shakeel Ahmed</p>
                </div>
                <div style="margin-bottom: 5px;">
                    <label style="width: 25%; display: inline-block">Receiver Address:</label>
                    <p style="width: 75%; display: inline;">P.O Box 126208, Deira Dubai U.A.E</p>
                </div>
                <div>
                    <label style="width: 25%; display: inline-block">Contact Number:</label>
                    <p style="width: 75%; display: inline;">+(971) 56-386-0507</p>
                </div>


            </td>
        </tr>
    </table>--}}

    <table width="100%">
        <tr>
            <td>
                <h4 style="margin-bottom: 8px;">Pay via Bank Transfer</h4>

   {{--             <div style="margin-bottom: 5px;">
                    <label style="width: 25%; display: inline-block">Title of Account:</label>
                    <p style="width: 75%; display: inline;">The ACE Publications</p>
                </div>--}}

                <div style="margin-bottom: 5px;">
                    <label style="width: 25%; display: inline-block">Account No.</label>
                    <p style="width: 75%; display: inline;">001520125604001</p>
                </div>
                <div style="margin-bottom: 5px;">
                    <label style="width: 25%; display: inline-block">Bank Name:</label>
                    <p style="width: 75%; display: inline;">Dubai Islamic Bank</p>
                </div>
                <div style="margin-bottom: 5px;">
                    <label style="width: 25%; display: inline-block">Bank Address:</label>
                    <p style="width: 75%; display: inline;">Al-Shola Building, Deira City Center, Deira Dubai</p>
                </div>
                <div style="margin-bottom: 5px;">
                    <label style="width: 25%; display: inline-block">Branch Code:</label>
                    <p style="width: 75%; display: inline;">001</p>
                </div>
                <div style="margin-bottom: 5px;">
                    <label style="width: 25%; display: inline-block">Swift Code:</label>
                    <p style="width: 75%; display: inline;">DUIBAEAD</p>
                </div>
                <div>
                    <label style="width: 25%; display: inline-block">IBAN:</label>
                    <p style="width: 75%; display: inline;">AE86-0240-0015-2012-5604-001</p>
                </div>

            </td>
        </tr>
    </table>

    <table width="100%">
        <tr>
            <td>
                <h4 style="margin-bottom: 8px;">Pay via Credit Card</h4>
                <div style="margin-bottom: 5px;">
                    <label style="width: 25%; display: inline-block">Pay Online (Click the link):</label>
                    <p style="width: 75%; display: inline;"><a style="color: #2b6cb0" href="https://secure.telr.com/gateway/ql/MedwellPublications_7243.html">https://secure.telr.com/gateway/ql/MedwellPublications_7243.html</a> </p>
                </div>

            </td>
        </tr>
    </table>

    <table width="100%" height = "100%" style="padding-top: 3%;">
        <tr>
            <td width="50%">

            </td>
            <td width="20%">

            </td>
            <td align="center" width="30%" style="">
                <img width="150px" style="" src="{{ url('images/2.png') }}">
            </td>
        </tr>
    </table>

    <table width="100%" height = "100%" style="padding-top: 4%;">
        <tr style="background-color: #476ca1; color: white;">
            <td align="center">
                <h2 style="margin-top: 5px; margin-bottom: 5px;">The ACE Publication</h2>
            </td>
        </tr>
    </table>



</div>

</body>
</html>
