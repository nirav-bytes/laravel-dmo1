<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script> --}}
    <style>
        body {
            background-color: #f9f9fa;
        }

        .flex {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
        }

        @media (max-width: 991.98px) {
            .padding {
                padding: 1.5rem;
            }
        }

        @media (max-width: 767.98px) {
            .padding {
                padding: 1rem;
            }
        }

        /* .padding {
            padding: 5rem;
        } */

        .card {
            box-shadow: none;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            -ms-box-shadow: none;
        }

        .pl-3,
        .px-3 {
            padding-left: 1rem !important;
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid #d2d2dc;
            border-radius: 0;
            margin-top: 2rem;
        }

        .card .card-title {
            color: #000000;
            margin-bottom: 0.625rem;
            font-size: 0.875rem;
            font-weight: 500;
        }

        .card .card-description {
            margin-bottom: 0.875rem;
            font-weight: 400;
            color: #76838f;
        }

        p {
            font-size: 0.875rem;
            margin-bottom: 0.5rem;
            line-height: 1.5rem;
        }

        .table-responsive {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar;
        }

        .table,
        .jsgrid .jsgrid-table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
        }

        .table thead th,
        .jsgrid .jsgrid-table thead th {
            border-top: 0;
            border-bottom-width: 1px;
            font-weight: 500;
            font-size: 0.875rem;
            text-transform: uppercase;
        }

        .table td,
        .jsgrid .jsgrid-table td {
            font-size: 0.875rem;
            padding: 0.475rem 0.4375rem;
        }

        .mt-10 {
            padding: 0.875rem 0.3375rem !important;
        }

        button {
            outline: 0 !important;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0rem rgba(0, 123, 255, 0.25) !important;
        }

        .badge {
            border-radius: 0;
            font-size: 12px;
            line-height: 1;
            padding: 0.375rem 0.5625rem;
            font-weight: normal;
            border: none;
        }
        button.badge.badge-success {
            background-color: green;
        }
        button.badge.badge-danger{
            background-color: red;
        }
    </style>
</head>

<body>
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row container d-flex">
                <div class="col-lg-8 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">Add and remove row in table using jquery</h4>
                            <hr>
                            <div class="table-responsive">
                                <table id="faqs" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>User</th>
                                            <th>Product</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="text" class="form-control" placeholder="User name"></td>
                                            <td><input type="text" placeholder="Product name" class="form-control">
                                            </td>
                                            <td class="mt-10"><button class="badge badge-danger"><i
                                                        class="fa fa-trash"></i> Delete</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="text-center"><button onclick="addfaqs();" class="badge badge-success"><i
                                        class="fa fa-plus"></i> ADD NEW</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    var faqs_row = 0;

    function addfaqs() {
        html = '<tr id="faqs-row' + faqs_row + '">';
        html += '<td><input type="text" class="form-control" placeholder="User name"></td>';
        html += '<td><input type="text" placeholder="Product name" class="form-control"></td>';
        html += '<td class="mt-10"><button class="badge badge-danger" onclick="$(\'#faqs-row' + faqs_row +
            '\').remove();"><i class="fa fa-trash"></i> Delete</button></td>';

        html += '</tr>';

        $('#faqs tbody').append(html);

        faqs_row++;
    }
</script>
