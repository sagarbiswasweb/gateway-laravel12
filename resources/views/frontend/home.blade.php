@extends('frontend.master')

@section('title')
  Home
@endsection

@section('content')
 
    <STYLE type="text/css">
        h1 { text-align: left ;
        font-size:small;
        font-weight:15;
        text-size-adjust: auto;
        }
        
    </STYLE>
    <!-- img1 {
    width: 100%;
    height: auto;
    }-->
    
    <div>
        <!--hero section start-->
        <section class="hero-section text-white bg-dark mobile-padding" style="background: url('assets/img/shape/dot-dot-wave-shape.svg') no-repeat bottom left">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    {{-- this div is for festiv card image. it is static, not dynamic  --}}
                    {{-- <div class="swiper-slide">
                        <img src="{{asset('uploads/img/slider/sharodiya-card.jpg')}}"/>
                    </div> --}}

                    <div class="swiper-slide">
                        <img src="{{asset('uploads/img/slider/business-management.jpg')}}" />
                        <div class="caption">
                            <h4>Business Management System</h4>
                            <div class="action-btns mt-5">
                                <a href="{{ route('page.business-management') }}" class="btn btn-danger me-3">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('uploads/img/slider/right-dession.jpg')}}" />
                        <div class="caption">
                            <h4> Right Decision on Right Time</h4>
                            <div class="action-btns mt-5">
                                <a href="{{ route('page.right-decision') }}" class="btn btn-danger me-3">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('uploads/img/slider/integrated-business.jpg')}}" />
                        <div class="caption">
                            <h4>Integrated all Business Process</h4>
                            <div class="action-btns mt-5">
                                <a href="{{ route('page.integrated-all-busines') }}" class="btn btn-danger me-3">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('uploads/img/slider/real-time.jpg')}}" />
                        <div class="caption">
                            <h4>Real Time Decision Support System</h4>
                            <div class="action-btns mt-5">
                                <a href="{{ route('page.real-time-decision') }}" class="btn btn-danger me-3">Learn more</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                {{-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> --}}
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <!--hero section end-->

        <!--feature tab section start-->
        <section class="feature-tab-section ptb-120">
            <div class="container">
                <div class="row justify-content-center align-content-center">
                    <div class="col-lg-12">
                        <div class="section-heading text-start">
                            <h2 class="text-center" style="color: rgb(34, 36, 39)">Customize Enterprise Resource Planning (ERP)</h2>

                            <p>
                                Welcome to Gateway Automation Limited. At Gateway Automation Limited, we understand the intricate web of business processes that drive your organization forward. Our cutting-edge Enterprise Resource Planning (ERP) solutions are designed to seamlessly integrate and automate these processes, empowering your business for unparalleled efficiency and growth. By centralizing your data, providing actionable insights, and implementing robust internal controls, our ERP solutions streamline operations, reduce redundancy, and enhance decision-making at every level of your organization.
                            </p>

                            <p>
                                Every business has unique needs, and our ERP solutions are fully customizable to suit your specific requirements. Whether you operate in finance, manufacturing, supply chain, or service sectors, our platform adapts to your workflows, helping your teams collaborate more efficiently and make data-driven decisions. With real-time reporting and analytics, you can monitor performance, forecast trends, and respond proactively to changes in the market.
                            </p>

                            <p>
                                At Gateway Automation Limited, we focus not only on software but also on supporting your people. Our team of experts works closely with your organization during every stage of implementation, from planning and integration to training and ongoing support. This ensures that your teams can leverage the full power of the ERP system without disruption to daily operations.
                            </p>

                            <p>
                                Get started today and transform the way you do business with Gateway Automation Limited ERP solutions. Schedule a demo or contact us to discuss how we can tailor our offerings to meet the specific needs of your organization. With our solutions, you can drive efficiency, improve accuracy, and achieve operational excellence.
                            </p>

                            <p>
                                Contact us to empower your business, embrace efficiency, and choose Gateway Automation Limited for a brighter future. Experience a seamless integration of technology and business intelligence that propels your organization toward long-term success and sustainable growth.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <h3 class="text-center" style="color: rgb(34, 36, 39)">Services We Provide</h3>
                        <ul class="nav justify-content-center feature-tab-list-2 flex-wrap mb-4 shadow-sm" 
                            style="background: linear-gradient(90deg, #ffffff, #f9f9f9); border-radius: 10px; padding: 10px 15px;" 
                            id="nav-tab" role="tablist">

                            <li class="nav-item-1 m-1 flex-fill">
                                <a class="nav-link custom-tab d-flex align-items-center justify-content-center" href="#tab-0" data-bs-toggle="tab" data-bs-target="#tab-0" role="tab">
                                    <i class="bi bi-cash-coin me-2"></i> Account & Finance Management System
                                </a>
                            </li>
                            <li class="nav-item-1 m-1 flex-fill">
                                <a class="nav-link custom-tab active d-flex align-items-center justify-content-center" href="#tab-9" data-bs-toggle="tab" data-bs-target="#tab-9" role="tab">
                                    <i class="bi bi-people-fill me-2"></i> Hr Admin & Payroll
                                </a>
                            </li>
                            <li class="nav-item-1 m-1 flex-fill">
                                <a class="nav-link custom-tab d-flex align-items-center justify-content-center" href="#tab-1" data-bs-toggle="tab" data-bs-target="#tab-1" role="tab">
                                    <i class="bi bi-building me-2"></i> Real Estate & Property Management
                                </a>
                            </li>
                            <li class="nav-item-1 m-1 flex-fill">
                                <a class="nav-link custom-tab d-flex align-items-center justify-content-center" href="#tab-2" data-bs-toggle="tab" data-bs-target="#tab-2" role="tab">
                                    <i class="bi bi-shop me-2"></i> Trading Business
                                </a>
                            </li>
                            <li class="nav-item-1 m-1 flex-fill">
                                <a class="nav-link custom-tab d-flex align-items-center justify-content-center" href="#tab-3" data-bs-toggle="tab" data-bs-target="#tab-3" role="tab">
                                    <i class="bi bi-truck me-2"></i> Supply Chain Management System
                                </a>
                            </li>
                            <li class="nav-item-1 m-1 flex-fill">
                                <a class="nav-link custom-tab d-flex align-items-center justify-content-center" href="#tab-4" data-bs-toggle="tab" data-bs-target="#tab-4" role="tab">
                                    <i class="bi bi-gear-fill me-2"></i> Manufacturing
                                </a>
                            </li>
                            <li class="nav-item-1 m-1 flex-fill">
                                <a class="nav-link custom-tab d-flex align-items-center justify-content-center" href="#tab-5" data-bs-toggle="tab" data-bs-target="#tab-5" role="tab">
                                    <i class="bi bi-mortarboard-fill me-2"></i> Education Management System
                                </a>
                            </li>
                            <li class="nav-item-1 m-1 flex-fill">
                                <a class="nav-link custom-tab d-flex align-items-center justify-content-center" href="#tab-6" data-bs-toggle="tab" data-bs-target="#tab-6" role="tab">
                                    <i class="bi bi-tree-fill me-2"></i> Tea Estate Management System
                                </a>
                            </li>
                            <li class="nav-item-1 m-1 flex-fill">
                                <a class="nav-link custom-tab d-flex align-items-center justify-content-center" href="#tab-7" data-bs-toggle="tab" data-bs-target="#tab-7" role="tab">
                                    <i class="bi bi-phone me-2"></i> Mobile App & Website Design & Dev
                                </a>
                            </li>
                            <li class="nav-item-1 m-1 flex-fill">
                                <a class="nav-link custom-tab d-flex align-items-center justify-content-center" href="#tab-8" data-bs-toggle="tab" data-bs-target="#tab-8" role="tab">
                                    <i class="bi bi-pc-display me-2"></i> ICT Services
                                </a>
                            </li>
                            <li class="nav-item-1 m-1 flex-fill">
                                <a class="nav-link custom-tab d-flex align-items-center justify-content-center" href="#tab-10" data-bs-toggle="tab" data-bs-target="#tab-10" role="tab">
                                    <i class="bi bi-headset me-2"></i> Customer Service & Registration
                                </a>
                            </li>
                            <li class="nav-item-1 m-1 flex-fill">
                                <a class="nav-link custom-tab d-flex align-items-center justify-content-center" href="#tab-11" data-bs-toggle="tab" data-bs-target="#tab-11" role="tab">
                                    <i class="bi bi-phone-fill me-2"></i> Mobile Phone Management
                                </a>
                            </li>
                            <li class="nav-item-1 m-1 flex-fill">
                                <a class="nav-link custom-tab d-flex align-items-center justify-content-center" href="#tab-12" data-bs-toggle="tab" data-bs-target="#tab-12" role="tab">
                                    <i class="bi bi-rulers me-2"></i> Architectural & Engineering
                                </a>
                            </li>
                            <li class="nav-item-1 m-1 flex-fill">
                                <a class="nav-link custom-tab d-flex align-items-center justify-content-center" href="#tab-13" data-bs-toggle="tab" data-bs-target="#tab-13" role="tab">
                                    <i class="bi bi-box-seam me-2"></i> Procurement & Inventory
                                </a>
                            </li>
                            <li class="nav-item-1 m-1 flex-fill">
                                <a class="nav-link custom-tab d-flex align-items-center justify-content-center" href="#tab-14" data-bs-toggle="tab" data-bs-target="#tab-14" role="tab">
                                    <i class="bi bi-telephone-forward me-2"></i> Sales & Telesales
                                </a>
                            </li>
                            <li class="nav-item-1 m-1 flex-fill">
                                <a class="nav-link custom-tab d-flex align-items-center justify-content-center" href="#tab-15" data-bs-toggle="tab" data-bs-target="#tab-15" role="tab">
                                    <i class="bi bi-car-front me-2"></i> Vehicle Management
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content" id="nav-tabContent">

                            <div class="tab-pane fade pt-60" id="tab-0" role="tabpanel">
                                <div class="row justify-content-center align-items-center justify-content-around">
                                    <div class="col-lg-7">
                                        <div class="feature-tab-info">
                                            <h3 style="color: rgb(34, 36, 39)">Account & Finance Management System</h3>
                                            <ul>
                                                <li><i class="fad fa-check-circle"></i>Flexible Classification of Chart of Accounts</li>
                                                <li><i class="fad fa-check-circle"></i>Bank, Branch &amp; Account Information</li>
                                                <li><i class="fad fa-check-circle"></i>Cash/Bank Transfer</li>
                                                <li><i class="fad fa-check-circle"></i>Money Receipt Entry &amp; Cancellation</li>
                                                <li><i class="fad fa-check-circle"></i>Client Cheque Deposit View</li>
                                                <li><i class="fad fa-check-circle"></i>Auto Voucher Entry for Different Department</li>
                                                <li><i class="fad fa-check-circle"></i>Cheque Book Management &amp; Printing</li>
                                                <li><i class="fad fa-check-circle"></i>Receivables &amp; Payables with Aging</li>
                                                <li><i class="fad fa-check-circle"></i>Ledger Management</li>
                                                <li><i class="fad fa-check-circle"></i>Trail Balance</li>
                                                <li><i class="fad fa-check-circle"></i>Financial Statements (Financial Position, Comprehensive Income, Cash Flows, Notes)</li>
                                                <li><i class="fad fa-check-circle"></i>Asset Register</li>
                                                <li><i class="fad fa-check-circle"></i>Multi Companies Supported</li>
                                                <li><i class="fad fa-check-circle"></i>Flexible Financial Years</li>
                                                <li><i class="fad fa-check-circle"></i>Paperless Accounting</li>
                                                <li><i class="fad fa-check-circle"></i>High Security for Each Transaction</li>
                                                <li><i class="fad fa-check-circle"></i>Different Level Approval System as per Company’s Requirements</li>
                                            </ul>
                                            <a href="{{ route('service.account-and-finance') }}" class="read-more-link text-decoration-none mt-4 d-block text-center">Know More
                                                <i class="far fa-arrow-right ms-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <img src="{{asset('frontend/assets/img/services/real-estate-management.png')}}" alt="feature tab" class="img-fluid mt-4 mt-lg-0 mt-xl-0 rounded">
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade pt-60 active show" id="tab-1" role="tabpanel">
                                <div class="row justify-content-center align-items-center justify-content-around">
                                    <div class="col-lg-7">
                                    <!--  <div class="col-md-13 col-lg-10"> -->
                                        <div class="feature-tab-info">
                                            <h3 style="color: rgb(34, 36, 39)">Main Features of Gateway's ERP System</h3>
                                            <ul>
                                                <li><i class="fad fa-check-circle m-0"></i>Account & Finance Management System</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Human Resource Management System</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Administration Management System</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Architectural & Engineering Management</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Customer Service & Registration System</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Logistic Management System</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Mobile Phone Management System</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Land Development Management System</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Sales & Telesales Management System</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Procurement & Inventory Management</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Design Service Management System</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Vehicle Management System</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Education Management System</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Supply Chain Management System</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Tea Estate Management System</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Mobile App Design and Development</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Website Design and Development</li>
                                                <li><i class="fad fa-check-circle m-0"></i>ICT Services</li>
                                            </ul>
                                            <a href="{{ route('service.real-estate-and-property') }}" class="read-more-link text-decoration-none mt-4 d-block text-center">Know More
                                                <i class="far fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <img src="{{asset('frontend/assets/img/services/real-estate-management.png')}}" alt="feature tab" class="img-fluid mt-4 mt-lg-0 mt-xl-0">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade pt-60" id="tab-2" role="tabpanel">
                                <div class="row justify-content-center align-items-center justify-content-around">
                                    <div class="col-lg-5">
                                        <img src="{{asset('frontend/assets/img/services/trading.png')}}" alt="feature tab" class="img-fluid mb-4 mb-lg-0 mb-xl-0">
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="feature-tab-info">
                                            <h3 style="color: rgb(34, 36, 39)">Trading Business Main Features</h3>
                                            <ul>
                                                <li><i class="fad fa-check-circle"></i>Employee Daily Attendance Analysis</li>
                                                <li><i class="fad fa-check-circle"></i>Employee Monthly Salary Generation</li>
                                                <li><i class="fad fa-check-circle"></i>Bonus Calculation</li>
                                                <li><i class="fad fa-check-circle"></i>Mobile Celling Information</li>
                                                <li><i class="fad fa-check-circle"></i>Company Gate Pass</li>
                                                <li><i class="fad fa-check-circle"></i>Vehicle Management System</li>
                                                <li><i class="fad fa-check-circle"></i>Mobile Phone Management System</li>
                                                <li><i class="fad fa-check-circle"></i>Mobile Set, Sim, Monthly Bill etc.</li>
                                                <li><i class="fad fa-check-circle"></i>Employees Fuel Allowance Entry</li>
                                                <li><i class="fad fa-check-circle"></i>Security Employee Information</li>
                                                <li><i class="fad fa-check-circle"></i>Security Employees Job Schedule</li>
                                                <li><i class="fad fa-check-circle"></i>Security Bill Entry</li>
                                            </ul>
                                            <a href="{{ route('service.trading-business') }}" class="read-more-link text-decoration-none mt-4 d-block text-center">Know More
                                                <i class="far fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade pt-60" id="tab-3" role="tabpanel">
                                <div class="row justify-content-center align-items-center justify-content-around">
                                    <div class="col-lg-7">
                                        <div class="feature-tab-info">
                                            <h3 style="color: rgb(34, 36, 39)">Supply Chain Management System features</h3>
                                            <ul>
                                                <li><i class="fad fa-check-circle"></i>Employee Daily Attendance Analysis</li>
                                                <li><i class="fad fa-check-circle"></i>Employee Monthly Salary Generation</li>
                                                <li><i class="fad fa-check-circle"></i>Bonus Calculation</li>
                                                <li><i class="fad fa-check-circle"></i>Mobile Celling Information</li>
                                                <li><i class="fad fa-check-circle"></i>Company Gate Pass</li>
                                                <li><i class="fad fa-check-circle"></i>Vehicle Management System</li>
                                                <li><i class="fad fa-check-circle"></i>Mobile Phone Management System</li>
                                                <li><i class="fad fa-check-circle"></i>Mobile Set, Sim, Monthly Bill etc.)</li>
                                                <li><i class="fad fa-check-circle"></i>Employees Fuel Allowance Entry</li>
                                                <li><i class="fad fa-check-circle"></i>Security Employee Information</li>
                                                <li><i class="fad fa-check-circle"></i>Security Employees Job Schedule</li>
                                                <li><i class="fad fa-check-circle"></i>Security Bill Entry </li>
                                            </ul>
                                            <a href="{{ route('service.supply-chain-management') }}" class="read-more-link text-decoration-none mt-4 d-block text-center">Know More
                                                <i class="far fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <img src="{{asset('frontend/assets/img/services/supply-chain-management-system.png')}}" alt="feature tab" class="img-fluid mt-4 mt-lg-0 mt-xl-0">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade pt-60" id="tab-4" role="tabpanel">
                                <div class="row justify-content-center align-items-center justify-content-around">
                                    <div class="col-lg-5">
                                        <img src="{{asset('frontend/assets/img/services/manufacturing.png')}}" alt="feature tab" class="img-fluid mb-4 mb-lg-0 mb-xl-0">
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="feature-tab-info">
                                            <h3 style="color: rgb(34, 36, 39)">Manufacturing features</h3>
                                            <ul>
                                                <li><i class="fad fa-check-circle"></i>Employee Daily Attendance Analysis</li>
                                                <li><i class="fad fa-check-circle"></i>Employee Monthly Salary Generation</li>
                                                <li><i class="fad fa-check-circle"></i>Bonus Calculation</li>
                                                <li><i class="fad fa-check-circle"></i>Mobile Celling Information</li>
                                                <li><i class="fad fa-check-circle"></i>Company Gate Pass</li>
                                                <li><i class="fad fa-check-circle"></i>Vehicle Management System</li>
                                                <li><i class="fad fa-check-circle"></i>Mobile Phone Management System</li>
                                                <li><i class="fad fa-check-circle"></i>Mobile Set, Sim, Monthly Bill etc.</li>
                                                <li><i class="fad fa-check-circle"></i>Employees Fuel Allowance Entry</li>
                                                <li><i class="fad fa-check-circle"></i>Security Employee Information</li>
                                                <li><i class="fad fa-check-circle"></i>Security Employees Job Schedule</li>
                                                <li><i class="fad fa-check-circle"></i>Security Bill Entry </li>
                                            </ul>
                                            <a href="{{ route('service.manufacturing') }}" class="read-more-link text-decoration-none mt-4 d-block text-center">Know More
                                                <i class="far fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade pt-60" id="tab-5" role="tabpanel">
                                <div class="row justify-content-center align-items-center justify-content-around">
                                    
                                    <div class="col-lg-7">
                                        <div class="feature-tab-info">
                                            <h3 style="color: rgb(34, 36, 39)">Education Management System</h3>
                                            <ul>
                                                <li><i class="fad fa-check-circle"></i>Students Admission</li>
                                                <li><i class="fad fa-check-circle"></i>Students/ Teachers/ Employee Attendance</li>
                                                <li><i class="fad fa-check-circle"></i>Online Class</li>
                                                <li><i class="fad fa-check-circle"></i>Online Examination</li>
                                                <li><i class="fad fa-check-circle"></i>Online Assignment</li>
                                                <li><i class="fad fa-check-circle"></i>Students Fees</li>
                                                <li><i class="fad fa-check-circle"></i>Students Examination Grading</li>
                                                <li><i class="fad fa-check-circle"></i>Notification Management-SMS/ Email</li>
                                                <li><i class="fad fa-check-circle"></i>Teachers / Employee Salary</li>
                                                <li><i class="fad fa-check-circle"></i>Library Management</li>
                                                <li><i class="fad fa-check-circle"></i>Accounts &amp; Financial Management</li>
                                            </ul>
                                            <a href="{{ route('service.education-management') }}" class="read-more-link text-decoration-none mt-4 d-block text-center">Know More
                                                <i class="far fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-lg-5">
                                        <img src="{{asset('frontend/assets/img/services/manufacturing_2.png')}}" alt="feature tab" class="img-fluid mb-4 mb-lg-0 mb-xl-0">
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade pt-60" id="tab-6" role="tabpanel">
                                <div class="row justify-content-center align-items-center justify-content-around">
                                    <div class="col-lg-5">
                                        <img src="{{asset('frontend/assets/img/services/trading.png')}}" alt="feature tab" class="img-fluid mb-4 mb-lg-0 mb-xl-0">
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="feature-tab-info">
                                            <h3 style="color: rgb(34, 36, 39)">Tea Estate Management System</h3>
                                            <ul class="list-unstyled mb-0">
                                                <li><i class="fad fa-check-circle m-0"></i>Details Invoice</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Employee Attendance</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Daily Labor Summary</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Monthly Salary Information</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Bin Card Information</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Fixed Asset Information</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Goods Received Notification</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Store Information</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Ration Card Information</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Delivery Information</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Section Bed Information</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Control Manual Etc.</li>
                                            </ul>
                                            <a href="{{ route('service.tea-estate-management') }}" class="read-more-link text-decoration-none mt-4 d-block text-center">Know More
                                                <i class="far fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade pt-60" id="tab-7" role="tabpanel">
                                <div class="row justify-content-center align-items-center justify-content-around">
                                    
                                    <div class="col-lg-7">
                                        <div class="feature-tab-info">
                                            <h3 style="color: rgb(34, 36, 39)">Mobile App & Website Design and Devolopment</h3>
                                            <ul class="list-unstyled mb-0">
                                                <li><i class="fad fa-check-circle m-0"></i>Custom Mobile App Development (iOS & Android)</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Responsive Website Design & Development</li>
                                                <li><i class="fad fa-check-circle m-0"></i>E-commerce Website & App Solutions</li>
                                                <li><i class="fad fa-check-circle m-0"></i>UI/UX Design & Prototyping</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Content Management System (CMS) Integration</li>
                                                <li><i class="fad fa-check-circle m-0"></i>API Development & Third-party Integration</li>
                                                <li><i class="fad fa-check-circle m-0"></i>SEO-Friendly & Performance-Optimized Development</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Cross-Platform App Development</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Maintenance & Support Services</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Scalable & Secure Architecture</li>
                                            </ul>
                                            <a href="{{ route('service.app-website') }}" class="read-more-link text-decoration-none mt-4 d-block text-center">Know More
                                                <i class="far fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-lg-5">
                                        <img src="{{asset('frontend/assets/img/services/manufacturing_2.png')}}" alt="feature tab" class="img-fluid mb-4 mb-lg-0 mb-xl-0">
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade pt-60" id="tab-8" role="tabpanel">
                                <div class="row justify-content-center align-items-center justify-content-around">
                                    <div class="col-lg-5">
                                        <img src="{{asset('frontend/assets/img/services/manufacturing.png')}}" alt="feature tab" class="img-fluid mb-4 mb-lg-0 mb-xl-0">
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="feature-tab-info">
                                            <h3 style="color: rgb(34, 36, 39)">ICT Services</h3>
                                            <ul class="list-unstyled mb-0">
                                                <li><i class="fad fa-check-circle m-0"></i>Network Setup & Administration</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Server Installation & Management</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Cloud Integration & Hosting Solutions</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Cybersecurity & Data Protection</li>
                                                <li><i class="fad fa-check-circle m-0"></i>IT Consulting & Strategy Planning</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Software Deployment & Licensing</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Backup & Disaster Recovery Solutions</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Proactive IT Monitoring & Maintenance</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Wireless & VPN Setup</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Technical Support & Helpdesk Services</li>
                                            </ul>
                                            <a href="{{ route('service.ict') }}" class="read-more-link text-decoration-none mt-4 d-block text-center">Know More
                                                <i class="far fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade pt-60" id="tab-9" role="tabpanel">
                                <div class="row justify-content-center align-items-center justify-content-around">
                                    <div class="col-lg-5">
                                        <img src="{{asset('frontend/assets/img/services/manufacturing.png')}}" alt="feature tab" class="img-fluid mb-4 mb-lg-0 mb-xl-0">
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="feature-tab-info">
                                            <h3 style="color: rgb(34, 36, 39)">Hr Admin & Payroll</h3>
                                            <ul class="list-unstyled mb-0">
                                                <li><i class="fad fa-check-circle m-0"></i>Comprehensive Employee Information (Official, Benefits, Personal, Previous Employment, Academic, Skills, Professional Memberships, References, Separation, Transfers, Disciplinary Actions)</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Employee Daily Attendance Analysis</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Employee Monthly Salary Generation</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Bonus and Advance Salary Calculation</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Mobile Calling Information Management</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Company Gate Pass Issuance</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Vehicle Management System</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Mobile Phone Management (Set, SIM, Monthly Bills, etc.)</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Employee Fuel Allowance Entry</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Security Employee Information Management</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Security Employees Job Scheduling</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Security Bill Entry and Tracking</li>
                                            </ul>
                                            <a href="{{ route('service.ict') }}" class="read-more-link text-decoration-none mt-4 d-block text-center">Know More
                                                <i class="far fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade pt-60" id="tab-10" role="tabpanel">
                                <div class="row justify-content-center align-items-center justify-content-around">
                                    
                                    <div class="col-lg-7">
                                        <div class="feature-tab-info">
                                            <h3 style="color: rgb(34, 36, 39)">Customer Service & Registration System</h3>
                                            <ul class="list-unstyled mb-0">
                                                <li><i class="fad fa-check-circle m-0"></i>Imoroved customer support and service delivery.</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Efficient handling of service requests and complaints.</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Centralized customer data for better relationship management.</li>
                                            </ul>
                                            <a href="{{ route('service.customer-service') }}" class="read-more-link text-decoration-none mt-4 d-block text-center">Know More
                                                <i class="far fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <img src="{{asset('frontend/assets/img/services/real-estate-management.png')}}" alt="feature tab" class="img-fluid mb-4 mb-lg-0 mb-xl-0">
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade pt-60" id="tab-11" role="tabpanel">
                                <div class="row justify-content-center align-items-center justify-content-around">
                                    <div class="col-lg-5">
                                        <img src="{{asset('frontend/assets/img/services/manufacturing.png')}}" alt="feature tab" class="img-fluid mb-4 mb-lg-0 mb-xl-0">
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="feature-tab-info">
                                            <h3 style="color: rgb(34, 36, 39)">Mobile Phone Management System</h3>
                                            <ul class="list-unstyled mb-0">
                                                <li><i class="fad fa-check-circle m-0"></i>Streamlined management of mobile devices and usage.</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Improved security and compliance with mobile policies.</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Efficient device provisioning and support.</li>
                                            </ul>
                                            <a href="{{ route('service.mobile-management-service') }}" class="read-more-link text-decoration-none mt-4 d-block text-center">Know More
                                                <i class="far fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade pt-60" id="tab-12" role="tabpanel">
                                <div class="row justify-content-center align-items-center justify-content-around">
                                    
                                    <div class="col-lg-7">
                                        <div class="feature-tab-info">
                                            <h3 style="color: rgb(34, 36, 39)">Architectural & Engineering Management System</h3>
                                            <ul class="list-unstyled mb-0">
                                                <li><i class="fad fa-check-circle m-0"></i>Centralized project management and documentation.</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Improved collaboration between architects and engineers.</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Enhanced project tracking and reporting.</li>
                                            </ul>
                                            <a href="{{ route('service.architectural-eng') }}" class="read-more-link text-decoration-none mt-4 d-block text-center">Know More
                                                <i class="far fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <img src="frontend/assets/img/services/manufacturing_2.png" alt="feature tab" class="img-fluid mb-4 mb-lg-0 mb-xl-0">
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade pt-60" id="tab-13" role="tabpanel">
                                <div class="row justify-content-center align-items-center justify-content-around">
                                    <div class="col-lg-5">
                                        <img src="frontend/assets/img/services/manufacturing.png" alt="feature tab" class="img-fluid mb-4 mb-lg-0 mb-xl-0">
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="feature-tab-info">
                                            <h3 style="color: rgb(34, 36, 39)">Procurement & Inventory Management System</h3>
                                            <ul class="list-unstyled mb-0">
                                                <li><i class="fad fa-check-circle m-0"></i>Streamlined procurement process and supplier management.</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Real-time inventory tracking and control.</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Improved accuracy in inventory forecasting and replenishment.</li>
                                            </ul>
                                            <a href="{{ route('service.procurement-inventory') }}" class="read-more-link text-decoration-none mt-4 d-block text-center">Know More
                                                <i class="far fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade pt-60" id="tab-14" role="tabpanel">
                                <div class="row justify-content-center align-items-center justify-content-around">
                                    
                                    <div class="col-lg-7">
                                        <div class="feature-tab-info">
                                            <h3 style="color: rgb(34, 36, 39)">Sales & Telesales Management System</h3>
                                            <ul class="list-unstyled mb-0">
                                                <li><i class="fad fa-check-circle m-0"></i>Improved lead management and conversion rates.</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Efficient tracking of sales performance and targets.</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Enanced support for telesales activities and customer outreach.</li>
                                            </ul>
                                            <a href="{{ route('service.sales-telesales') }}" class="read-more-link text-decoration-none mt-4 d-block text-center">Know More
                                                <i class="far fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <img src="frontend/assets/img/services/manufacturing_2.png" alt="feature tab" class="img-fluid mb-4 mb-lg-0 mb-xl-0">
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade pt-60" id="tab-15" role="tabpanel">
                                <div class="row justify-content-center align-items-center justify-content-around">
                                    <div class="col-lg-5">
                                        <img src="frontend/assets/img/services/manufacturing.png" alt="feature tab" class="img-fluid mb-4 mb-lg-0 mb-xl-0">
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="feature-tab-info">
                                            <h3 style="color: rgb(34, 36, 39)">Vehicle Management System</h3>
                                            <ul class="list-unstyled mb-0">
                                                <li><i class="fad fa-check-circle m-0"></i>Efficient scheduling of vehicle maintenance and repairs.</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Real-time-tracking of vehicle location and usage.</li>
                                                <li><i class="fad fa-check-circle m-0"></i>Improved management of vehicle-related expenses and logistics.</li>
                                            </ul>
                                            <a href="{{ route('service.vehicle-management') }}" class="read-more-link text-decoration-none mt-4 d-block text-center">Know More
                                                <i class="far fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        


        <!--feature tab section start-->
        <section class="feature-section-two bg-light ptb-120">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between justify-content-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="feature-content-wrap">
                            <div class="section-heading">
                                <h2 style="color: rgb(34, 36, 39)">Experts in Development Across All Technologies</h2>
                                <p>We craft exceptional digital solutions by combining innovative strategies with cutting-edge technology to deliver seamless experiences.</p>
                            </div>
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-start mb-4">
                                    <div class="icon-box bg-light rounded me-4">
                                        <img src="{{asset('frontend/assets/img/icon/pixel-perfect.png')}}" width="50" />
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5" style="color: rgb(34, 36, 39)">Robust Functionality</h3>
                                        <p>We build feature-rich solutions that are intuitive, efficient, and tailored to meet real-world needs—ensuring every interaction is seamless and purposeful.</p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-4">
                                    <div class="icon-box bg-light rounded me-4">
                                        <img src="{{asset('frontend/assets/img/icon/unique-minimal-design.png')}}" width="50" />
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5" style="color: rgb(34, 36, 39)">Unique &amp; Minimal Design</h3>
                                        <p>Our designs focus on simplicity and elegance, creating minimal yet powerful interfaces that enhance usability and brand value.</p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start mb-4 mb-lg-0">
                                    <div class="icon-box bg-light rounded me-4">
                                        <img src="{{asset('frontend/assets/img/icon/24-support.png')}}" width="50" />
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="h5" style="color: rgb(34, 36, 39)">24/7 Free Online Support</h3>
                                        <p>Our dedicated support team is available around the clock to ensure smooth operations and timely assistance for all your needs.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="feature-img-wrap">
                            <img src="{{asset('frontend/assets/img/feature-hero-img-themed.svg')}}" alt="feature image" class="img-fluid rounded-custom">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="why-choose-us pt-60 pb-120 bg-light">
            <div class="container">
                <div class="row justify-content-lg-between justify-content-center align-items-center">
                    <div class="col-lg-5 col-md-7 order-1 order-lg-0">
                        <div class="why-choose-img position-relative">
                            <img src="{{asset('frontend/assets/img/feature-hero-img-2-themed.svg')}}" class="img-fluid" alt="duel-phone">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 order-0 order-lg-1">
                        <div class="why-choose-content">
                            <div class="mb-32">
                                <h2 style="color: rgb(34, 36, 39)">We run all kinds of services in form of software</h2>
                                <p>Smart, scalable, and impactful solutions to help your business grow.</p>
                            </div>
                            <ul>
                                <li><i class="fad fa-check-circle m-0"></i>Thought Leadership – Lead with vision and innovation</li>
                                <li><i class="fad fa-check-circle m-0"></i>Personal Branding – Build a strong digital presence</li>
                                <li><i class="fad fa-check-circle m-0"></i>Modernized Prospecting – Find and connect with the right opportunities</li>
                                <li><i class="fad fa-check-circle m-0"></i>Better Win Rates – Close more deals with smart strategies</li>
                                <li><i class="fad fa-check-circle m-0"></i>Showcasing Success – Highlight achievements effectively</li>
                                <li><i class="fad fa-check-circle m-0"></i>Sales Compliance – Stay secure and fully compliant</li>
                                <li><i class="fad fa-check-circle m-0"></i>Manage Smartly – Streamline workflows with ease</li>
                                <li><i class="fad fa-check-circle m-0"></i>Communicate Fast – Collaborate instantly and effectively</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--feature tab section end-->

        <!--cta start-->
        <section class="cta-section bg-dark text-white ptb-120 position-relative overflow-hidden">
            <div class="container">
                <div class="row justify-content-center align-content-center">
                    <div class="col-md-10 col-lg-6">
                        <div class="section-heading text-center">
                        <!--   <h4 class="h5 text-primary">Testimonial</h4> -->
                            <h2 style="color: white">What They Say About Us</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="position-relative w-100">
                            <div class="swiper-container testimonialSwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide border border-2 p-5 rounded-custom position-relative">
                                        <img src="{{asset('frontend/assets/img/testimonial/quotes-dot.svg')}}" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                        <div class="d-flex mb-32 align-items-center">
                                            <img src="{{asset('frontend/assets/img/clients/ramkrisna.jpg')}}" class="img-fluid me-3 rounded" width="60" alt="user">
                                            <div class="author-info">
                                                <h6 class="mb-0">Swami Vibhatmananda</h6>
                                                <small>Secretary at Ramakrishna Mission, Dinajpur</small>
                                            </div>
                                        </div>
                                        <blockquote class="testimonial-text">
                                            Gateway Accounts & Finance Management System at Ramakrishna Ashrama & Ramakrishana Mission, Dinajpur, Bangladesh is working smoothly and we are very much happy to use the software. Best wishes to Gateway Automation Limited.
                                        </blockquote>
                                        <img src="{{asset('frontend/assets/img/testimonial/quotes.svg')}}" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                    </div>

                                    <div class="swiper-slide border border-2 p-5 rounded-custom position-relative">
                                        <img src="{{asset('frontend/assets/img/testimonial/quotes-dot.svg')}}" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                        <div class="d-flex mb-32 align-items-center">
                                            <img src="{{asset('frontend/assets/img/clients/royal-gold.jpg')}}" class="img-fluid me-3 rounded" width="60" alt="user">
                                            <div class="author-info">
                                                <h6 class="mb-0">Alak Kumar Saha </h6>
                                                <small>Managing Director at Royal Gold Bangladesh Limited</small>
                                            </div>
                                        </div>
                                        <blockquote class="testimonial-text">
                                            <h6>Embarrassed by the Enterprise Resource Planning (ERP) System.</h6>
                                            Working with Gateway Automation Limited has been a 
                                            game-changer for Royal Gold Bangladesh Limited. Their 
                                            Trading Management System transformed our operations 
                                            by streamlining inventory management, enhancing 
                                            order processing, and providing real-time insights into 
                                            our trading activities. The team’s expertise and commitment 
                                            to delivering a tailored solution have significantly 
                                            improved our efficiency and accuracy. We couldn't be 
                                            more satisfied with the results!
                                        </blockquote>
                                        <img src="{{asset('frontend/assets/img/testimonial/quotes.svg')}}" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                    </div>

                                    <div class="swiper-slide border border-2 p-5 rounded-custom position-relative">
                                        <img src="{{asset('frontend/assets/img/testimonial/quotes-dot.svg')}}" alt="quotes" width="100" class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                        <div class="d-flex mb-32 align-items-center">
                                            <img src="{{asset('frontend/assets/img/clients/mazidsons.jpg')}}" class="img-fluid me-3 rounded" width="60" alt="user">
                                            <div class="author-info">
                                                <h6 class="mb-0">Md. Jourgisur Rahaman</h6>
                                                <small>Executive Director at Mazidsons Construction Limited</small>
                                            </div>
                                        </div>
                                        <blockquote class="testimonial-text">
                                            <h6>ERP for Architectural & Engineering Management System !</h6>
                                            Partnering with Gateway Automation Limited has been 
                                            a pivotal decision for Masidsons Construction Limited. 
                                            Their Architectural & Engineering Management System 
                                            has streamlined our project management processes, 
                                            improved coordination between teams, and enhanced 
                                            our overall project execution. The team’s expertise and 
                                            dedication to customizing their solutions to fit our 
                                            unique needs have made a significant impact on our 
                                            operations. Their commitment to excellence and innovative 
                                            approach is truly commendable. We wholeheartedly 
                                            recommend their services to others in the industry
                                        </blockquote>
                                        <img src="{{asset('frontend/assets/img/testimonial/quotes.svg')}}" alt="quotes" class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                    </div>
                                </div>
                            </div>
                            <span class="swiper-button-next"></span>
                            <span class="swiper-button-prev"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--cta end-->


        <!-- Clients Section -->
        <section class="integration-section ptb-120">
            <div class="container">
                <!-- Section Heading -->
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="section-heading">
                            <h2 class="mb-0" style="color: rgb(34, 36, 39)">Some of Our Valuable Clients</h2>
                            <p class="text-muted">We proudly work with these amazing organizations across industries.</p>
                        </div>
                    </div>
                </div>

                <!-- Clients Grid -->
                <div class="row">
                    <div class="col-12">
                        <div class="integration-wrapper position-relative w-100">
                            <!--animated shape start-->
                            <ul class="position-absolute animate-element parallax-element shape-service z--1 mt-5">
                                <li class="layer" data-depth="0.03">
                                    <img src="{{asset('frontend/assets/img/shape/dot-dot-wave-shape.svg')}}" alt="shape" class="img-fluid position-absolute color-shape-3">
                                </li>
                                <li class="layer" data-depth="0.03">
                                    <img src="{{asset('frontend/assets/img/color-shape/feature-3.svg')}}" alt="shape" class="img-fluid position-absolute color-shape-3">
                                </li>
                            </ul>
                            <!--animated shape end-->

                            <!-- Clients Grid -->
                            <div class="row g-4 justify-content-center client-wrapper">
                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                        <img src="{{asset('frontend/assets/img/clients/ramkrisna.jpg')}}" alt="Ramakrishna Math & Mission Dhaka" class="img-fluid mb-2">
                                        <h6 class="client-name mb-0">Ramakrishna Math & Mission Dhaka</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                        <img src="{{asset('frontend/assets/img/clients/jcx.jpg')}}" alt="JCX Developments Ltd" class="img-fluid mb-2">
                                        <h6 class="client-name mb-0">JCX Developments Ltd</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                        <img src="{{asset('frontend/assets/img/clients/royal-gold.jpg')}}" alt="Royal Gold Pvt Ltd" class="img-fluid mb-2">
                                        <h6 class="client-name mb-0">Royal Gold Pvt Ltd</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                        <img src="{{asset('frontend/assets/img/clients/RI.jpg')}}" alt="Royal International" class="img-fluid mb-2">
                                        <h6 class="client-name mb-0">Royal International</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                        <img src="{{asset('frontend/assets/img/clients/.jpg')}}" alt="Chittagong Agro Machinery" class="img-fluid mb-2">
                                        <h6 class="client-name mb-0">Chittagong Agro Machinery</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                        <img src="{{asset('frontend/assets/img/clients/ril.jpg')}}" alt="KB Interlining Ltd." class="img-fluid mb-2">
                                        <h6 class="client-name mb-0">KB Interlining Ltd.</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                        <img src="{{asset('frontend/assets/img/clients/.jpg')}}" alt="Parts Zone" class="img-fluid mb-2">
                                        <h6 class="client-name mb-0">Parts Zone</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                        <img src="{{asset('frontend/assets/img/clients/mazidsons.jpg')}}" alt="Mazid Sons Construction Ltd" class="img-fluid mb-2">
                                        <h6 class="client-name mb-0">Mazid Sons Construction Ltd</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                        <img src="{{asset('frontend/assets/img/clients/Momenuddin3.jpg')}}" alt="Momen Uddin Ahmed & Co. Ltd." class="img-fluid mb-2">
                                        <h6 class="client-name mb-0">Momen Uddin Ahmed & Co. Ltd.</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                        <img src="{{asset('frontend/assets/img/clients/assu.png')}}" alt="Assurance Developments Ltd" class="img-fluid mb-2">
                                        <h6 class="client-name mb-0">Assurance Developments Ltd</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                        <img src="{{asset('frontend/assets/img/clients/merine-city.jpg')}}" alt="Atlantic Properties & Development Ltd" class="img-fluid mb-2">
                                        <h6 class="client-name mb-0">Atlantic Properties & Development Ltd</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                        <img src="{{asset('frontend/assets/img/clients/gorai-flims.jpg')}}" alt="Gorai Films" class="img-fluid mb-2">
                                        <h6 class="client-name mb-0">Gorai Films</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                        <img src="{{asset('frontend/assets/img/clients/creation.jpg')}}" alt="Creation Developments Ltd" class="img-fluid mb-2">
                                        <h6 class="client-name mb-0">Creation Developments Ltd</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                        <img src="{{asset('frontend/assets/img/clients/ramkrisna.jpg')}}" alt="Ramakrishna Math & Mission Dinajpur" class="img-fluid mb-2">
                                        <h6 class="client-name mb-0">Ramakrishna Math & Mission Dinajpur</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                        <img src="{{asset('frontend/assets/img/clients/saifan.jpg')}}" alt="Saifan Properties Limited" class="img-fluid mb-2">
                                        <h6 class="client-name mb-0">Saifan Properties Limited</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                        <img src="{{asset('frontend/assets/img/clients/mya.jpg')}}" alt="MYA Trading International" class="img-fluid mb-2">
                                        <h6 class="client-name mb-0">MYA Trading International</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                        <img src="{{asset('frontend/assets/img/clients/kk.jpg')}}" alt="KK Trade" class="img-fluid mb-2">
                                        <h6 class="client-name mb-0">KK Trade</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                        <img src="{{asset('frontend/assets/img/clients/wasa.jpg')}}" alt="W.Rahman & Co." class="img-fluid mb-2">
                                        <h6 class="client-name mb-0">W.Rahman & Co.</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                        <img src="{{asset('frontend/assets/img/clients/rkmr.jpg')}}" alt="Ramakrishna Sevashrama Uttara Rowali" class="img-fluid mb-2">
                                        <h6 class="client-name mb-0">Ramakrishna Sevashrama Uttara Rowali</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                        <img src="{{asset('frontend/assets/img/clients/doreen-logo.png')}}" alt="Doreen Developments Limited" class="img-fluid mb-2">
                                        <h6 class="client-name mb-0">Doreen Developments Limited</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                        <img src="{{asset('frontend/assets/img/clients/ramkrisna.jpg')}}" alt="Ramakrishna Ashrama & Mission Baliati, Manikgonj" class="img-fluid mb-2">
                                        <h6 class="client-name mb-0">Ramakrishna Ashrama & Mission Baliati, Manikgonj</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                        <img src="{{asset('frontend/assets/img/clients/infinity.jpg')}}" alt="Infinity Homes Ltd." class="img-fluid mb-2">
                                        <h6 class="client-name mb-0">Infinity Homes Ltd.</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition">
                                        <img src="{{asset('frontend/assets/img/clients/modhucity.jpg')}}" alt="Modhu City" class="img-fluid mb-2">
                                        <h6 class="client-name mb-0">Modhu City</h6>
                                    </div>
                                </div>

                                <!-- Repeat for remaining clients -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--integration section end-->
    </div>





    @push('scripts')

        {{-- js code for Swipers --}}
        <script>
            // Existing Swiper
            var swiper1 = new Swiper(".mySwiper", {
                spaceBetween: 30,
                effect: "fade",
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                speed: 1000
            });

            // Testimonial Swiper
            var testimonialSwiper = new Swiper(".testimonialSwiper", {
                loop: false,
                slidesPerView: 1,
                spaceBetween: 30,
                autoHeight: false, // ✅ adjusts height per slide smoothly
                grabCursor: true,
                speed: 800,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });




            // ✅ Trim testimonial text to 200 chars and add "Read more"
            document.querySelectorAll('.testimonial-text').forEach(function(el) {
                let fullText = el.textContent.trim();

                if (fullText.length > 200) {
                    let shortText = fullText.substring(0, 200) + "...";
                    el.setAttribute("data-full-text", fullText);
                    el.textContent = shortText;

                    let link = document.createElement("a");
                    link.href = "javascript:void(0);";
                    link.className = "see-more";
                    link.textContent = "Read more";

                    el.after(link);

                    link.addEventListener("click", function() {
                        if (el.classList.contains("expanded")) {
                            el.textContent = shortText;
                            this.textContent = "Read more";
                            el.classList.remove("expanded");
                        } else {
                            el.textContent = fullText;
                            this.textContent = "Read less";
                            el.classList.add("expanded");
                        }
                    });
                }
            });


        </script>




        {{-- scroll effect for nav tab  --}}
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const tabLinks = document.querySelectorAll('.feature-tab-list-2 .nav-link');
                const headerOffset = 50; // adjust this value according to your header height

                tabLinks.forEach(link => {
                    link.addEventListener('shown.bs.tab', function (event) {
                        const targetId = link.getAttribute('data-bs-target');
                        const targetElement = document.querySelector(targetId);
                        if (targetElement) {
                            const elementPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
                            const offsetPosition = elementPosition - headerOffset;

                            window.scrollTo({
                                top: offsetPosition,
                                behavior: 'smooth'
                            });
                        }
                    });
                });
            });
        </script>

    @endpush


@endsection

