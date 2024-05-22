<!-- Sidebar -->
<nav id="sidebar">
    <div class="sidebar-header">
        <h3><span>LifeLine Hospital</span></h3>
    </div>
    <ul class="list-unstyled components" style="margin-top:70px">
        <li class="active">
            <a href="main.php" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
        </li>

        <li class="dropdown">
            <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">person</i>Patients
            </a>
            <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                <li><a href="addpatient.php">Add Patients</a></li>
                <li><a href="viewpatients.php">View Patients</a></li>
            </ul>
        </li>

        <li class="dropdown">
            <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">person_outline</i>Doctor
            </a>
            <ul class="collapse list-unstyled menu" id="homeSubmenu2">
                <li><a href="adddoctor.php">Add Doctor</a></li>
                <li><a href="viewdoctor.php">View Doctor</a></li>
            </ul>
        </li>

         <li class="dropdown">
            <a href="viewappoitment.php" aria-expanded="false">
                <i class="material-icons">assignment</i>Appointments 
            </a>
        </li>
        <li class="dropdown">
            <a href="viewqueries.php" aria-expanded="false">
                <i class="material-icons">info</i>Queries
            </a>
        </li>
    </ul>
</nav>
