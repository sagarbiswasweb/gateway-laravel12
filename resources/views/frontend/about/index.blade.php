@extends('frontend.master')

@section('title')
  About Us
@endsection

@section('content')
    <div>
        <!--page header section start-->
        <section class="page-header position-relative overflow-hidden ptb-120 bg-dark about-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 pt-5 mt-5">
                        <h1 class="display-5 fw-bold">About us</h1>
                        <p class="lead">Welcome to the forefront of innovation in the ICT sector. Introducing Gateway Automation Ltd, a trailblazer in software solutions and IT-enabled services. </p>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
            </div>
        </section>
        <!--page header section end-->
        <section class="feature-section-two ptb-120 bg-light">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <ul class="list-unstyled mt-5">
                            <li class="d-flex align-items-start mb-4">
                                <div class="icon-box bg-light rounded me-4">
                                    <img src="{{asset('frontend/assets/img/icon/mission.png')}}" width="50"/>
                                </div>
                                <div class="icon-content">
                                    <h3 class="h5" style="color: rgb(34, 36, 39)">Our Mission</h3>
                                    <p>
                                        Our mission is to empower businesses by fully digitizing every aspect of their operations, streamlining processes, and enhancing efficiency. 
                                        Driven by the spirit of "Made in Bangladesh," we are committed to delivering innovative and reliable technology solutions that help organizations achieve their goals, 
                                        optimize performance, and embrace the future of digital transformation with confidence.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4">
                                <div class="icon-box bg-light rounded me-4">
                                    <img src="{{asset('frontend/assets/img/icon/vision.png')}}" width="50"/>
                                </div>
                                <div class="icon-content">
                                    <h3 class="h5" style="color: rgb(34, 36, 39)">Our Vision</h3>
                                    <p>
                                        Our vision is to become the leading partner for businesses seeking seamless and innovative technology solutions. 
                                        We aim to provide the perfect blend of efficiency, reliability, and cutting-edge digital tools, enabling organizations to thrive, 
                                        grow sustainably, and achieve their full potential in an increasingly competitive and technology-driven world.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="section-heading">
                            <h2 style="color: rgb(34, 36, 39)">Our Story</h2>

                            <p>
                                Gateway Automation Ltd is a distinguished private limited company at the forefront of the Information and Communication Technology (ICT) sector, 
                                specializing in providing comprehensive software and IT-enabled services (ITES). Our primary focus is on <strong>Enterprise Resource Planning (ERP)</strong> management systems, 
                                designed to streamline, automate, and enhance business processes across various industries. Our journey is driven by a clear inspiration — the desire to simplify technology — 
                                and a core strength rooted in integrity, transparency, and a commitment to excellence.
                            </p>

                            <p>
                                With over two decades of experience in ICT and business process management, Gateway Automation Ltd has continuously evolved to address the dynamic needs of modern enterprises. 
                                We leverage deep domain expertise and technological innovation to deliver solutions that are not only functional but also scalable, adaptable, and tailored to the unique requirements of each client. 
                                Our ERP systems are purpose-built to support diverse business operations, including Real Estate & Property Management, Trading, Supply Chain Management, Manufacturing, and more.
                            </p>

                            <p>
                                Understanding that every business — whether large-scale or small-scale — has its unique challenges, we offer specialized solutions such as our top-tier 
                                Account & Finance Management System and Human Resource Management System. These platforms are seamlessly integrated, enabling organizations to enhance operational efficiency, 
                                reduce redundancies, and gain actionable insights. Central to our service philosophy is the customization of ERP applications, which allows businesses to automate critical processes 
                                while maintaining full control and visibility through a centralized database consolidating inputs from departments such as Human Resources, Finance, Inventory, Manufacturing, Sales, and Marketing.
                            </p>

                            <p>
                                The GATEWAY-ERP system embodies our commitment to delivering end-to-end solutions for all business needs. By combining automation, real-time insights, and intuitive design, 
                                we empower organizations to optimize performance, improve decision-making, and drive sustainable growth. Our key offerings include:
                            </p>

                            <ul>
                                <li>Account & Finance Management System</li>
                                <li>Human Resource Management System</li>
                                <li>Administration Management System</li>
                                <li>Architectural & Engineering Management System</li>
                                <li>Customer Service & Registration Management System</li>
                                <li>Logistics Management System</li>
                                <li>Property Development & Procurement Management System</li>
                                <li>Sales & Telesales Management System</li> 
                                <li>Procurement & Inventory Management System</li>
                                <li>Design Service Management System</li>
                                <li>Vehicle Management System</li>
                                <li>System Administration</li>
                                <li>Education Management System</li>
                                <li>Tea Estate Management System</li>
                                <li>Mobile App & Website Design and Development</li>
                                <li>ICT Services</li>
                            </ul>

                            <p>
                                Beyond providing robust ERP solutions, Gateway Automation Ltd adopts a holistic approach to business technology. We offer value-added services such as Mobile App & Website development, ICT consulting, 
                                and technical support to ensure that businesses can thrive in a digital-first environment. By integrating innovation, reliability, and industry best practices, 
                                we position ourselves as a trusted partner in guiding organizations through the complexities of automation and digital transformation.
                            </p>

                            <p>
                                At Gateway Automation Ltd, our story is one of dedication, expertise, and a relentless pursuit of technological excellence. 
                                We are committed to helping businesses achieve their goals, unlock their full potential, and navigate the ever-changing landscape of the ICT world with confidence and clarity.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection