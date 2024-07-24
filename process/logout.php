<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
session_start();

// ทำลาย Session
session_destroy();

// Redirect ไปยังหน้า Login หรือหน้าอื่นๆ
header("Location: ../login.php"); // เปลี่ยนเป็น URL หน้าที่ต้องการ
exit();
