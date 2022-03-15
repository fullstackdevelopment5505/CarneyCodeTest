<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Members​ ​and​ ​Subscriptions</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</head>

<body style="margin: 48px;">
    <div>
        <h1>API Data</h1>
        <a href="/members" class="col-sm-4">Original members</a>
        <a href="/subscribed-members" class="col-sm-4">Subscribed members</a>
        <a href="/sorted-subscribed-members" class="col-sm-4">Sorted Subscribed members</a>
    </div>

    <div style="margin-top: 32px;">
        <h1>Original members</h1>
        @foreach ($members as $member)
            <div>{{ $member }}</div>
        @endforeach
    </div>

    <div style="margin-top: 32px;">
        <h1>Part1 : Augment the output of the /members with raw data</h1>
        @foreach ($subs_members as $member)
            <div>{{ $member }}</div>
        @endforeach
    </div>

    <div style="margin: 32px 0;">
        <h1>Part2 : Subscribed​ ​members with Bootstrap table</h1>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Subscription</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subs_members as $member)
                    <tr>
                        <td>{{ $member->id }}</td>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->email }}</td>
                        <td>{{ $member->phone }}</td>
                        <td>{{ $member->subscription->name }}</td>
                        <td>{{ $member->subscription->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div>
        <h1>Part3 : Sorting subscribed​ ​members by DESC</h1>
        <h4>Average subscribed price : {{ $sub_avg }}</h4>
        <table style="border: 1px solid #dee2e6;">
            <thead>
                <tr>
                    <th style="border: 1px solid #dee2e6; padding: 8px 16px">Id</th>
                    <th style="border: 1px solid #dee2e6; padding: 8px 16px">Name</th>
                    <th style="border: 1px solid #dee2e6; padding: 8px 16px">Email</th>
                    <th style="border: 1px solid #dee2e6; padding: 8px 16px">Phone</th>
                    <th style="border: 1px solid #dee2e6; padding: 8px 16px">Subscription</th>
                    <th style="border: 1px solid #dee2e6; padding: 8px 16px">Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sorted_memebers as $member)
                    <tr>
                        <td style="border: 1px solid #dee2e6; padding: 8px 16px">{{ $member->id }}</td>
                        <td style="border: 1px solid #dee2e6; padding: 8px 16px">{{ $member->name }}</td>
                        <td style="border: 1px solid #dee2e6; padding: 8px 16px">{{ $member->email }}</td>
                        <td style="border: 1px solid #dee2e6; padding: 8px 16px">{{ $member->phone }}</td>
                        <td style="border: 1px solid #dee2e6; padding: 8px 16px">{{ $member->subscription->name }}
                        </td>
                        <td style="border: 1px solid #dee2e6; padding: 8px 16px">{{ $member->subscription->price }}
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="5" style="border: 1px solid #dee2e6; padding: 8px 16px; text-align: right">Average
                        subscribed price</td>
                    <td style="border: 1px solid #dee2e6; padding: 8px 16px">{{ $sub_avg }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
