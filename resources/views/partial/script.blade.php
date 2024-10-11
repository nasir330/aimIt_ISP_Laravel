<!--Bootstrap JS CDN Link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<!-- jQuery CDN JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
</script>
<!--FontAwsome JS CDN -->
<script src="https://cdn.jsdelivr.net/gh/NOCNP/font-awesome-pro@main/fontawesome-pro-6.5.1-web/js/all.min.js"></script>
<!-- DataTables CDN JS -->
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>

<script>
$(document).ready(function () {
    function applyDataTableScroll() {
        var scrollYValue;

        if (window.matchMedia("(min-width: 1025px)").matches) {
            scrollYValue = 300; // For screens larger than 1025px
        } else if (window.matchMedia("(max-width: 600px)").matches) {
            scrollYValue = 350; // For screens up to 600px
        } else if (window.matchMedia("(min-width: 601px) and (max-width: 1024px)").matches) {
            scrollYValue = 600; // For screens between 601px and 1024px
        }

        $('#nonOrderListAble').DataTable({
            paging: true,
            lengthMenu: [
                [100, 25, 50, -1],
                [100, 25, 50, "All"]
            ],
            processing: true,
            scrollX: true,
            scrollCollapse: true,
            destroy: true,  // To destroy the existing instance before re-initializing
            scrollY: scrollYValue,
        });
    }

    // Initial setup
    applyDataTableScroll();

    // Reapply on screen resize if necessary
    window.addEventListener('resize', function() {
        applyDataTableScroll();
    });
});

</script>
<script>
    // Function to show the pop-up
    function showPopup() {
        const zoomIn = document.getElementById('zoomIn');
        zoomIn.classList.add('show'); // Add the 'show' class for zoom effect
    }

    // Example of triggering the pop-up (you can adjust based on your flow)
    document.addEventListener('DOMContentLoaded', function() {
        showPopup(); // Call this function to show the pop-up when needed
    });
</script>