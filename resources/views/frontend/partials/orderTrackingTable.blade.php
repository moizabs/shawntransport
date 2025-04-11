<div class="card w-75 border border-danger shadow-lg" style="z-index:8;">
    <div class="card-header">
        <h4>Order Details</h4>
    </div>
    <div class="card-body">
        <div class="container mt-4">
            <h4 class="text-center">Tracking Id of {{ $responseData['data']['id'] }}</h4>
            <div class="d-flex justify-content-center">
                <div class="col-lg-12 text-center">
                    <h5 class="text-left text-center">Vehicle Info</h5>
                    @php
                        $ymk = explode('*^-', $responseData['data']['ymk']);
                        $transport = explode('*^-', $responseData['data']['transport']);
                        $condition = explode('*^-', $responseData['data']['condition']);
                    @endphp
                    @if (isset($ymk[0]))
                        @if (count($ymk) > 1)
                            <div class="position-relative">
                                <span style="cursor:pointer;" id="moreVeh">{{ count($ymk) }} vehicles for
                                    Transport</span>
                                <div id="showVeh">
                                    @foreach ($ymk as $key => $val)
                                        <span style="font-size:14px;">{{ $val }}</span><br>
                                        <div class="d-flex justify-content-center text-white">
                                            <span
                                                class="badge bg-info mx-2">{{ isset($condition[$key]) ? ($condition[$key] == 1 ? 'Open' : 'Enclosed') : 'Enclosed' }}</span>
                                            <span
                                                class="badge bg-primary mx-2">{{ isset($transport[$key]) ? ($transport[$key] == 1 ? 'Running' : 'Non-running') : 'Non-running' }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @else
                            @foreach ($ymk as $key => $val)
                                <span class="fw-bold">Vehicle Name: {{ $val }}</span><br>
                            @endforeach
                            <div class="d-flex justify-content-center text-white">
                                <span
                                    class="badge bg-warning mx-2">{{ isset($condition[0]) ? ($condition[0] == 1 ? 'Open' : 'Enclosed') : 'Enclosed' }}</span>
                                <span
                                    class="badge bg-primary mx-2">{{ isset($transport[0]) ? ($transport[0] == 1 ? 'Running' : 'Non-running') : 'Non-running' }}</span>
                            </div>
                        @endif
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="float-md-start">
                        <p class="fw-bold">Pickup:</p>
                        <p><i class="fas fa-location-dot text-primary"></i> {{ $responseData['data']['originzsc'] }}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="float-md-end">
                        <p class="fw-bold">Delivery:</p>
                        <p><i class="fas fa-location-dot text-danger"></i>
                            {{ $responseData['data']['destinationzsc'] }}
                        </p>
                    </div>
                </div>
            </div>
            <?php
            if ($responseData['data']['pstatus'] >= 10 && $responseData['data']['pstatus'] <= 14) { ?>
            <div class="cards text-center">
                <table class="table caption-top m-0">
                    <thead>
                        <tr>
                            <th scope="col">Status</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">
                                Booked On
                            </th>
                            <td>
                                <?php
                                if (isset($responseData['data']['date_of_booked'])) {
                                    if (date('Y-m-d', strtotime($responseData['data']['created_at'])) <= date('Y-m-d', strtotime($responseData['data']['date_of_booked']))) {
                                        $booked = $responseData['data']['date_of_booked'];
                                        echo date('M, d Y D', strtotime($responseData['data']['date_of_booked']));
                                    } else {
                                        $booked = $responseData['data']['created_at'];
                                        echo date('M, d Y D', strtotime($responseData['data']['created_at']));
                                    }
                                } else {
                                    echo date('M, d Y D', strtotime($responseData['data']['created_at']));
                                }
                                if ($responseData['data']['pstatus'] > 8 && $responseData['data']['pstatus'] <= 14) {
                                    echo ' <i class="far fa-check-circle fa-lg mr-2 " style="color: #8fc445;"></i>';
                                }
                                ?>
                            </td>
                        </tr>
                        <?php
                            if (isset($responseData['order'])) {
                                foreach ($responseData['order'] as $key => $val) {
                                    ?>
                        <tr>
                            <th scope="row">
                                <?php
                                if ($val['pstatus'] == 9) {
                                    echo 'Schedulling';
                                } elseif ($val['pstatus'] == 10) {
                                    echo 'Scheduled';
                                } elseif ($val['pstatus'] == 11) {
                                    echo 'Pickup';
                                } elseif ($val['pstatus'] == 12) {
                                    echo 'Delivered';
                                } elseif ($val['pstatus'] == 13) {
                                    echo 'Completed';
                                } elseif ($val['pstatus'] == 14) {
                                    echo 'Cancelled';
                                }
                                ?>
                            </th>
                            <td>
                                <?php
                                $listed = $val['created_at'];
                                if ($val['pstatus'] == 9) {
                                    if (date('Y-m-d', strtotime($booked)) <= date('Y-m-d', strtotime($val['created_at']))) {
                                        $listed = $listed;
                                        echo date('M, d Y D', strtotime($val['created_at']));
                                    } else {
                                        $listed = $booked;
                                        echo date('M, d Y D', strtotime($booked));
                                    }
                                    if ($responseData['data']['pstatus'] > 9 && $responseData['data']['pstatus'] <= 14) {
                                        echo ' <i class="far fa-check-circle fa-lg mr-2 "  style="color: #8fc445;"></i>';
                                    }
                                } elseif ($val['pstatus'] == 10) {
                                    if (date('Y-m-d', strtotime($listed)) <= date('Y-m-d', strtotime($val['created_at']))) {
                                        $dispatch = $val['created_at'];
                                        echo date('M, d Y D', strtotime($val['created_at']));
                                    } else {
                                        $dispatch = $listed;
                                        echo date('M, d Y D', strtotime($listed));
                                    }
                                    if ($responseData['data']['pstatus'] > 10 && $responseData['data']['pstatus'] <= 14) {
                                        echo ' <i class="far fa-check-circle fa-lg mr-2 "  style="color: #8fc445;"></i>';
                                    }
                                } elseif ($val['pstatus'] == 11) {
                                    if (date('Y-m-d', strtotime($dispatch)) <= date('Y-m-d', strtotime($responseData['data']['pickup_date']))) {
                                        if (date('Y-m-d', strtotime($val['created_at'])) <= date('Y-m-d', strtotime($responseData['data']['pickup_date']))) {
                                            $pickup = $responseData['data']['pickup_date'];
                                            echo date('M, d Y D', strtotime($responseData['data']['pickup_date']));
                                        } else {
                                            $pickup = $val['created_at'];
                                            echo date('M, d Y D', strtotime($val['created_at']));
                                        }
                                    } else {
                                        $pickup = $dispatch;
                                        echo date('M, d Y D', strtotime($dispatch));
                                    }
                                    if ($responseData['data']['pstatus'] > 11 && $responseData['data']['pstatus'] <= 14) {
                                        echo ' <i class="far fa-check-circle fa-lg mr-2 "  style="color: #8fc445;"></i>';
                                    }
                                } elseif ($val['pstatus'] == 12) {
                                    $pickup = $responseData['data']['delivery_date'];
                                    if (date('Y-m-d', strtotime($pickup)) <= date('Y-m-d', strtotime($responseData['data']['delivery_date']))) {
                                        if (date('Y-m-d', strtotime($val['created_at'])) <= date('Y-m-d', strtotime($responseData['data']['delivery_date']))) {
                                            echo date('M, d Y D', strtotime($responseData['data']['delivery_date']));
                                        } else {
                                            echo date('M, d Y D', strtotime($val['created_at']));
                                        }
                                    } else {
                                        echo date('M, d Y D', strtotime($pickup));
                                    }
                                    if ($responseData['data']['pstatus'] > 12 && $responseData['data']['pstatus'] <= 14) {
                                        echo ' <i class="far fa-check-circle fa-lg mr-2 "  style="color: #8fc445;"></i>';
                                    }
                                } elseif ($responseData['data']['pstatus'] == 13) {
                                    echo date('M, d Y D', strtotime($val['created_at']));
                                    echo ' <i class="far fa-check-circle fa-lg mr-2 "  style="color: #8fc445;"></i>';
                                } elseif ($responseData['data']['pstatus'] == 14) {
                                    echo date('M, d Y D', strtotime($val['created_at']));
                                    echo ' <i class="fa fa-times-circle-o mr-2 text-danger" aria-hidden="true"></i>';
                                }
                                ?>
                            </td>
                        </tr>
                        <?php
                                }
                            }

                            if ($responseData['data']['pstatus'] < 9 || $responseData['data']['pstatus'] == 18) {
                                ?>
                        <tr>
                            <th scope="row">
                                Schedulling
                            </th>
                            <td>
                                ---------
                                <?php
                                if ($responseData['data']['pstatus'] > 9 && $responseData['data']['pstatus'] <= 14) {
                                    echo ' <i class="far fa-check-circle fa-lg mr-2 "  style="color: #8fc445;"></i>';
                                }
                                ?>
                            </td>
                        </tr>
                        <?php
                            }
                            if ($responseData['data']['pstatus'] < 10 || $responseData['data']['pstatus'] == 18) {
                                ?>
                        <tr>
                            <th scope="row">
                                Scheduled
                            </th>
                            <td>
                                ---------
                                <?php
                                if ($responseData['data']['pstatus'] > 10 && $responseData['data']['pstatus'] <= 14) {
                                    echo ' <i class="far fa-check-circle fa-lg mr-2 "  style="color: #8fc445;"></i>';
                                }
                                ?>
                            </td>
                        </tr>
                        <?php
                            }
                            if ($responseData['data']['pstatus'] == 10) {
                                ?>
                        <tr>
                            <th scope="row">
                                Pickup
                            </th>
                            <td class="d-flex w-100">
                                <?php
                                if (isset($responseData['data']['pickup_date'])) {
                                    if (date('Y-m-d', strtotime($dispatch)) <= date('Y-m-d', strtotime($responseData['data']['pickup_date']))) {
                                        if (date('Y-m-d', strtotime($responseData['data']['created_at'])) <= date('Y-m-d', strtotime($responseData['data']['pickup_date']))) {
                                            $pickup = $responseData['data']['pickup_date'];
                                            echo date('M, d Y D', strtotime($responseData['data']['pickup_date']));
                                        } else {
                                            $pickup = $responseData['data']['created_at'];
                                            echo date('M, d Y D', strtotime($responseData['data']['created_at']));
                                        }
                                    } else {
                                        $pickup = $dispatch;
                                        echo date('M, d Y D', strtotime($dispatch));
                                    }
                                } else {
                                    echo date('M, d Y D');
                                }
                                ?>
                                <span class="badge badge-warning mx-2 d-flex align-items-center">est</span>
                                <span class="badge badge-primary question position-relative">
                                    <i class="fa-solid fa-question"></i>
                                    <div class="newtooltip">
                                        Pickup dates are estimated because there are many components associated with
                                        the
                                        transportation process, like Traffic, Harsh Weather conditions, truck
                                        breakdowns
                                        and some other unanticipated occasions included. we normally required (1 to
                                        5
                                        business days) for pickup
                                    </div>
                                </span>
                                <?php
                                if ($responseData['data']['pstatus'] > 11 && $responseData['data']['pstatus'] <= 14) {
                                    echo ' <i class="far fa-check-circle fa-lg mr-2 "  style="color: #8fc445;"></i>';
                                }
                                ?>
                            </td>
                        </tr>
                        <?php
                            }
                            if ($responseData['data']['pstatus'] >= 10 && $responseData['data']['pstatus'] < 12) {
                                ?>
                        <tr>
                            <th scope="row">
                                Delivered
                            </th>
                            <td class="d-flex w-100 d-flex align-items-center justify-content-center w-100">
                                <?php
                                if (isset($responseData['data']['delivery_date'])) {
                                    if (date('Y-m-d', strtotime($pickup)) <= date('Y-m-d', strtotime($responseData['data']['delivery_date']))) {
                                        if (date('Y-m-d', strtotime($responseData['data']['created_at'])) <= date('Y-m-d', strtotime($responseData['data']['delivery_date']))) {
                                            echo date('M, d Y D', strtotime($responseData['data']['delivery_date']));
                                        } else {
                                            echo date('M, d Y D', strtotime($responseData['data']['created_at']));
                                        }
                                    } else {
                                        echo date('M, d Y D', strtotime($pickup));
                                    }
                                } else {
                                    echo date('M, d Y D');
                                }
                                ?>
                                <span class="badge badge-warning mx-2 text-white d-flex align-items-center">est</span>
                                <i class="far fa-question-circle fa-lg  rounded align-items-center"
                                    style="color: #8fc445;" data-bs-custom-class="custom-tooltip"
                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delivery dates are estimated because there are many components associatedwith the transportation process, like route distance (1 to 9 business days) depending on miles, Traffic, Harsh Weather conditions, truck breakdowns and some other unanticipated occasions included."></i>
                                <?php
                                if ($responseData['data']['pstatus'] > 12 && $responseData['data']['pstatus'] <= 14) {
                                    echo ' <i class="far fa-check-circle fa-lg mr-2 "  style="color: #8fc445;"></i>';
                                }
                                ?>
                            </td>
                        </tr>
                        <?php
                            }
                            ?>
                    </tbody>
                </table>
            </div>
            <?php
            } else {
                ?>
            <div class="card" style="box-shadow: 0px 0px 7px 0px #1e78f5;">
                <div class="alert bg-danger text-light text-center">
                    <strong>Get Your Shipment Current Status By Calling Our Agent.</strong>
                </div>
                <div class="text-center mb-3">
                    <a href="tel:+18444744721" class="text-dark text-decoration-none d-flex justify-content-center"
                        style="align-items: center;"><i class="lni-phone-handset mr-2"></i> Toll free 1 (844)
                        474-4721</a>
                    <a href="mailto:quote@shipa1.com"
                        class="text-dark text-decoration-none d-flex justify-content-center"
                        style="align-items: center;"><i class="lni-envelope mr-2"></i> shawntransport@shipa1.com</a>
                </div>
            </div>
            <?php
            }
            ?>
            <br><br>
            <?php
            if ($responseData['price'] != 0) {
                if ($responseData['price'] > 0) {
                    if ($responseData['price'] > 0 && $responseData['price'] <= 300) {
                        $price1 = $responseData['price'] + 150;
                        $price2 = $responseData['price'] + 100;
                        $price3 = $responseData['price'];
                    } elseif ($responseData['price'] > 300 && $responseData['price'] <= 700) {
                        $price1 = $responseData['price'] + 200;
                        $price2 = $responseData['price'] + 150;
                        $price3 = $responseData['price'] + 50;
                    } elseif ($responseData['price'] > 700 && $responseData['price'] <= 1000) {
                        $price1 = $responseData['price'] + 250;
                        $price2 = $responseData['price'] + 200;
                        $price3 = $responseData['price'] + 100;
                    } elseif ($responseData['price'] > 1000 && $responseData['price'] <= 1500) {
                        $price1 = $responseData['price'] + 300;
                        $price2 = $responseData['price'] + 250;
                        $price3 = $responseData['price'] + 150;
                    } elseif ($responseData['price'] > 1500 && $responseData['price'] <= 2000) {
                        $price1 = $responseData['price'] + 400;
                        $price2 = $responseData['price'] + 350;
                        $price3 = $responseData['price'] + 250;
                    } else {
                        $price1 = $responseData['price'] + 500;
                        $price2 = $responseData['price'] + 450;
                        $price3 = $responseData['price'] + 350;
                    }
                }
            ?>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>City To City</th>
                            <th>Prices</th>
                            <th>Pick up with in</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="fw-normal">{{ $responseData['data']['originzsc'] }} -
                                {{ $responseData['data']['destinationzsc'] }}
                            </th>
                            <td>{{ $price1 }}</td>
                            <td>pickup 1 day <a class="badge bg-danger mx-2 text-white">guaranteed</a></td>
                        </tr>
                        <tr>
                            <th class="fw-normal">{{ $responseData['data']['originzsc'] }} -
                                {{ $responseData['data']['destinationzsc'] }}</th>
                            <td>{{ $price2 }}</td>
                            <td>pickup 2 days <a class="badge bg-warning mx-2 text-white">urgent</a></td>
                        </tr>
                        <tr>
                            <th class="fw-normal">{{ $responseData['data']['originzsc'] }} -
                                {{ $responseData['data']['destinationzsc'] }}</th>
                            <td>{{ $price3 }}</td>
                            <td>pickup 3 days <a class="badge bg-primary mx-2 text-white">regular</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>