<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Project-Lecturer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <style>
        @font-face {
            font-family: dmsanR;
            src: url('font/dmsansRegular.ttf');
        }

        .welcome {
            height: 200px;
            width: 100%;
            background-color: #DBF6fd;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            border-radius: 10px;
            padding-top: 1px;
        }

        .item2 {
            height: auto;
            width: 100%;
            background-color: #DBF6fd;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            border-radius: 10px;
            padding-top: 1px;
            margin: 0 auto;
            padding: 10px;
        }


        .item2 h1 {
            padding-left: 20px;
            font-family: dmsanR;
        }


        .welcome h1,
        h2,
        h3 {
            padding-left: 20px;
            font-family: dmsanR;
        }

        .grid-container {
            display: grid;
            grid-template-columns: 800px 800px;
            gap: 20px;
        }
/For the count down/
        .countdown-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .big-text {
            font-weight: bold;
            font-size: 4rem;
            line-height: 1;
            margin: 0 2rem;
        }

        .cont-el {
            text-align: center;
            width: 140px;
            margin: 0 15px;
        }

        .cont-el span {
            font-size: 1.3rem;
        }

        .date {
            margin: 85px 0 0 0;
            padding: 10px 25px;
            font-size: 1.1rem;
            border: none;
            border-radius: 5px;
        }
        table{
            border-collapse: collapse;
            width: 100%;
        }
        
        tr:first-of-type {
        border-bottom: 1px solid black;
        }

        td{
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th, td {
        padding: 30px;
        }

        @media screen and (max-width: 767px) {
            h1 {
                font-size: 3rem;
                padding: 20px;
            }

            .countdown-container {
                flex-wrap: wrap;
            }
        }

        .grid-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 20px;
        height: 80px;
        }
    </style>
</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="app-container">
        <div class="app-header">
            <div class="app-header-left">
                <span class="app-icon"></span>
                <img src="https://www.ump.edu.my/download/logo-ump-jawi-2021.png" alt=""
                    style="width:180px;height:101.25px;">
                <div class="search-wrapper">
                    <input class="search-input" type="text" placeholder="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-search"
                        viewBox="0 0 24 24">
                        <defs></defs>
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="M21 21l-4.35-4.35"></path>
                    </svg>
                </div>
            </div>
            <div class="app-header-right">
                <button class="notification-btn">
                    <a style="text-decoration: none;" href="{{ url('logout') }}">Logout</a>
                    <img src="assets/logout.png" height="30" width="30">
                </button>
                <!--<button class="profile-btn">
                    <img src="https://assets.codepen.io/3306515/IMG_2025.jpg" /> &nbsp
                    <span>{{ Auth::user()->name }}</span>
                </button>-->
            </div>
            <button class="messages-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-message-circle">
                    <path
                        d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
                </svg>
            </button>
             <!-- Profile Button -->
             <button class="profile-btn">
                    <img src="https://assets.codepen.io/3306515/IMG_2025.jpg" /> &nbsp
                    <span>{{ Auth::user()->name }}</span>
                </button>
        </div>
        <!-- SIDE BAR -->
        <div class="app-content">
            <div class="app-sidebar">
                <a href="{{url('lecturerDashboard')}}" class="app-sidebar-link">
                    <img src="/assets/home.png" alt="" height="25" width="25">
                </a>
                <a href="{{url('lecturerProjectTitle')}}" class="app-sidebar-link">
                    <img src="/assets/title.png" alt="" height="25" width="25">
                </a>
                <a href="{{ route('ManageProposal.LecturerProposal') }}" class="app-sidebar-link" title="List Submitted Proposal For Lecturer">
                    <img src="/assets/book.png" alt="" height="25" width="25">
                </a>
                <a href="{{url('superviseeLogbook')}}" class="app-sidebar-link"> 
                    <img src="/assets/proposal.png" alt="" height="25" width="25">
                </a>
            </div>


            <div class="projects-section">
                <br>
                <div class="projects-section-line">
                    <div class="projects-status">
                   
              

                    <div class="item-status">
                        <span class="status-number">Supervisee Logbook</span>
                       <br>
                        
                        <br>
                        <table style="width:100%">
                            <thead>
                                <tr>
                                    
                                    <th scope="col">STUDENT NAME</th>
                                    <th scope="col">MATRIC ID</th>
                                    <th scope="col">EMAIL </th>
                                    <th scope="col">DATE </th>
                                    <th scope="col">LOG </th>
                                    <th scope="col">STATUS APPROVAL </th>
                                </tr>

                                <tbody>
                                @foreach($logbooks as $logbook)
                                @if ($logbook->Status_Approval == "Not Approve")
                                    <tr>
                                        
                                        <td><?php echo $logbook->Student_Name; ?></td>
                                        <td><?php echo $logbook->Student_ID; ?></td>
                                        <td><?php echo $logbook->Student_Email; ?></td>
                                        <td><?php echo $logbook->Logbook_Date; ?></td>
                                        <td><div class="menu effect-12" style="width:100px;">        
                                            <ul>
                                            <li><a href="approveLogbook/{{$logbook->Logbook_ID}}">APPROVE</a></li>
                                            </ul>
                                            </div></td>
                                        <td><div class="menu effect-12" style="width:100px;">        
                                            <ul>
                                            <li><a href="rejectLogbook/{{$logbook->Logbook_ID}}">REJECT</a></li>
                                            </ul>
                                            </div></td>
                                @endif        
                                                            
                                        
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                            
                            </thead>
                 
                        </table>
                    </div>

                   


                    
                </div>


                <div id=ApproveLogbook class="project-boxes jsGridView">

                    
                
            </div>
           
        </div>
    </div>

    </div>

    </div>
    </div>


    <!-- partial -->
    <script src="{{ asset('js/admin.js') }}" defer></script>

</body>

</html>