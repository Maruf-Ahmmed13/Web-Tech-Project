<?php
// includes/alert.php

// Check if a session message exists
if (isset($_SESSION['message_type']) && isset($_SESSION['message_text'])): 
    
    $icon = $_SESSION['message_type']; // 'success', 'error', 'warning', 'info'
    $text = $_SESSION['message_text'];
?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: '<?php echo $icon; ?>',
                title: '<?php echo ucfirst($icon); ?>',
                text: '<?php echo $text; ?>',
                confirmButtonColor: '#DB7093',
                background: '#28273F',
                color: '#fff',
                // Professional Animations
                showClass: { popup: 'animate__animated animate__fadeInDown' },
                hideClass: { popup: 'animate__animated animate__fadeOutUp' }
            });
        });
    </script>
<?php 
    // Clear message after showing so it doesn't appear again on refresh
    unset($_SESSION['message_type']);
    unset($_SESSION['message_text']);
endif; 

// Function to set message (Call this in your PHP logic)
function setAlert($type, $text) {
    $_SESSION['message_type'] = $type;
    $_SESSION['message_text'] = $text;
}
?>