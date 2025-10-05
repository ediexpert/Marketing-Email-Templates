<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Exclusive Deals for You!' }}</title>
    <style>
        /* Responsive Design */
        @media only screen and (max-width: 600px) {
            .container {
                width: 100% !important;
                padding: 10px !important;
            }

            .product-card {
                width: 100% !important;
                display: block !important;
            }

            .product-image {
                height: 180px !important;
            }
        }

        a {
            text-decoration: none !important;
        }
    </style>
</head>

<body
    style="margin:0; padding:0; background-color:#f8f8f8; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;">

    <!-- Wrapper -->
    <table role="presentation" cellpadding="0" cellspacing="0" width="100%"
        style="background-color:#f8f8f8; padding:20px 0;">
        <tr>
            <td align="center">
                <table role="presentation" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;"
                    class="container">

                    <!-- Header -->
                    <tr>
                        <td align="center"
                            style="padding:20px 0; background-color:#ffffff; border-bottom:3px solid #FF1616;">
                            <img src="https://imagedelivery.net/qsixnSU_OZcGhNkQaa8lTA/0ec39f89-1cb4-4cdc-6858-622000896400/w=150,sharpen=1"
                                width="140" alt="Going2Dubai" style="display:block; margin-bottom:8px;">
                            <p style="margin:0; font-size:14px; color:#555555;">Your Gateway to Unforgettable
                                Experiences</p>
                        </td>
                    </tr>

                    <!-- Title & Message -->
                    <tr>
                        <td style="background-color:#ffffff; padding:24px;">
                            <h2 style="margin:0 0 10px; color:#000000; font-size:20px;">
                                {{ $title ?? 'Exclusive Deals for You!' }}</h2>
                            <p style="margin:0; font-size:15px; color:#555555;">Hi {{ $customer_name ?? 'Traveler' }},
                            </p>
                            <p style="margin-top:8px; font-size:15px; color:#555555;">
                                We’ve handpicked some amazing experiences just for you. Explore our top picks below!
                            </p>
                        </td>
                    </tr>

                    <!-- Product Loop -->
                    @foreach ($products as $product)
                        <tr>
                            <td style="background-color:#ffffff; padding:0 24px 16px;">
                                <a href="{{ $product['link'] }}" target="_blank"
                                    style="display:block; text-decoration:none;">
                                    <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
                                        class="product-card"
                                        style="border:1px solid #e5e5e5; border-radius:8px; overflow:hidden; margin-top:16px;">
                                        <tr>
                                            <td>
                                                <img src="{{ $product['image_url'] }}" alt="{{ $product['name'] }}"
                                                    style="width:100%; height:220px; object-fit:cover; display:block;"
                                                    class="product-image">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:16px;">
                                                <h3 style="margin:0 0 8px; font-size:16px; color:#000000;">
                                                    {{ $product['name'] }}</h3>
                                                <p style="margin:0 0 12px; color:#FF1616; font-weight:bold;">Starting
                                                    from {{ $product['price'] }}</p>
                                                <table role="presentation" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td align="center" bgcolor="#FF1616" style="border-radius:6px;">
                                                            <a href="{{ $product['link'] }}" target="_blank"
                                                                style="display:inline-block; padding:10px 20px; font-size:14px; color:#ffffff; background-color:#FF1616; border-radius:6px;">
                                                                Book Now
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                    <!-- Footer -->
                    <tr>
                        <td align="center"
                            style="background-color:#f2f2f2; color:#555555; padding:16px; font-size:13px;">
                            © {{ date('Y') }} <b>Going2Dubai</b>. All rights reserved.
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>

</html>
