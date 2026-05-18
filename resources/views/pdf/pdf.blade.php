<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employees Report</title>
<style>

    body{
        font-family: DejaVu Sans, sans-serif;
        padding:20px;
        color:#333;
    }

    h1{
        text-align:center;
        margin-bottom:25px;
        color:#111827;
    }

    table{
        width:100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    thead{
        background:#1f2937;
        color:white;
    }

    th{
        padding:8px;
        border:1px solid #000;
        font-size:12px;
        text-align:left;
    }

    td{
        padding:8px;
        border:1px solid #000;
        font-size:11px;
        word-wrap: break-word;
    }

</style>

</head>

<body>

    <h1>EMPLOYEES REPORT</h1>

    <table>

        <thead>
            <tr>

                <th>NO#</th>
                <th>NAME</th>
                <th>PHONE</th>
                <th>COUNTRY</th>
                <th>AGE</th>
                <th>HIRING DATE</th>
                <th>DEPARTMENT</th>
                <th>SALARY</th>

            </tr>
        </thead>

        <tbody>

            @foreach ($employes as $employe)

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>{{ $employe->name }}</td>

                <td>{{ $employe->phone }}</td>

                <td>{{ $employe->contry_code }}</td>

                <td>{{ $employe->age }}</td>

                <td>{{ date('d/m/Y', strtotime($employe->date)) }}</td>

                <td>
                    <span class="badge">
                        {{ $employe->departement->name }}
                    </span>
                </td>

                <td>
                    AED {{ number_format($employe->salary) }}
                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

    <div class="footer">
        Generated at : {{ now()->format('d/m/Y') }}
    </div>

</body>
</html>