@extends('jeremie.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Add a new Student</h3>
                </div>
                <div class="card-body m-auto">
                    <div class="row justify-content-center">
                        <div class="col-9">
                            <table class="table table-responsive table-center">
                                <thead>
                                    <tr>
                                        <th>Student Number</th>
                                        <th> Student Name</th>
                                        <th>Date of Payment</th>
                                        <th>Amount Paid</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fees as $fee)
                                    <tr>
                                        <td> {{ $fee->student_number }} </td>
                                        <td> {{ $fee->students->full_name }} </td>
                                        <td> {{ $fee->date_of_payment }} </td>
                                        <td> {{ $fee->amount }} </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
