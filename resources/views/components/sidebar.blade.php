<x-app-layout>
<!-- resources/views/components/sidebar.blade.php -->
<div class="col-span-2 p-4">  <!-- ni amik coulmn 2 je -->
    <!-- Sidebar content -->

    (auth()->user()->role=='admin')
        <ul class="menu bg-white rounded-box w-50">
            <li><a href="">Home</a></li>
            <li><a href="">Attendance</a></li>
            <li><a href="">Children Daily Board</a></li>
            <li><a href="">Kid Surveillance</a></li>
            <li><a href="">Announcement</a></li>
            <li><a href="">Payment</a></li>
            <li><a href="">Report Generation</a></li>

        </ul>
   <li>hheyy</li>

    <!-- @if(auth()->user()->role==='parents')
        <ul class="menu bg-white rounded-box w-50">
            <li><a href="">Home</a></li>
            <li><a href="">Attendance</a></li>
            <li><a href="">Children Daily Board</a></li>
            <li><a href="">Kid Surveillance</a></li>
            <li><a href="">Announcement</a></li>
            <li><a href="">Payment</a></li>
        </ul>
    @endif

    @if(auth()->user()->role==='staff')
        <ul class="menu bg-white rounded-box w-50">
            <li><a href="">Home</a></li>
            <li><a href="">Attendance</a></li>
            <li><a href="">Children Daily Board</a></li>
            <li><a href="">Kid Surveillance</a></li>
            <li><a href="">Announcement</a></li>
            <li><a href="">Payment</a></li>
        </ul>
    @endif -->

    
</div>
</x-app-layout>