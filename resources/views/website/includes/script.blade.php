
<!-- latest jquery-->
<script src="{{asset('/')}}website/assets/js/jquery-3.3.1.min.js"></script>

<!-- slick js-->
<script src="{{asset('/')}}website/assets/js/slick.js"></script>



<!-- tool tip js -->
<script src="{{asset('/')}}website/assets/js/tippy-popper.min.js"></script>
<script src="{{asset('/')}}website/assets/js/tippy-bundle.iife.min.js"></script>

<!-- popper js-->
<script src="{{asset('/')}}website/assets/js/popper.min.js"></script>

<!-- ajax search js -->
<script src="{{asset('/')}}website/assets/js/typeahead.bundle.min.js"></script>
<script src="{{asset('/')}}website/assets/js/typeahead.jquery.min.js"></script>
<script src="{{asset('/')}}website/assets/js/ajax-custom.js"></script>

<!-- Timer js-->
<script src="{{asset('/')}}website/assets/js/menu.js"></script>

<!-- Bootstrap js-->
<script src="{{asset('/')}}website/assets/js/bootstrap.js"></script>

<!-- father icon -->
<script src="{{asset('/')}}website/assets/js/feather.min.js"></script>
<script src="{{asset('/')}}website/assets/js/feather-icon.js"></script>

<!-- Bootstrap js-->
<script src="{{asset('/')}}website/assets/js/bootstrap-notify.min.js"></script>

<!-- Theme js-->
<script src="{{asset('/')}}website/assets/js/script.js"></script>
<script src="{{asset('/')}}website/assets/js/timer1.js"></script>
<script src="{{asset('/')}}website/assets/js/timer2.js"></script>
<script src="{{asset('/')}}website/assets/js/modal.js"></script>

<!-- elevatezoom js-->
<script src="{{asset('/')}}website/assets/js/jquery.elevatezoom.js"></script>


<!-- fontawesome js-->
<script src="{{asset('/')}}website/assets/js/all.js"></script>
<script src="{{asset('/')}}website/assets/js/all.min.js"></script>
<script src="{{asset('/')}}website/assets/js/fontawesome.js"></script>
<script src="{{asset('/')}}website/assets/js/fontawesome.min.js"></script>


<!---- icon------>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>



<script>
    function getPrice(id){
        $.ajax({
            type: "GET",
            url: "{{ route('get-price-by-area') }}",
            data: {id: id},
            dataType:"JSON",
            success:function (response) {
               // document.getElementById('price').value=response.price;

                var shippingTotal = Number(response.price);
                var subTotal = Number($('#subTotal').val());
                var taxAmount = Number($('#taxTotal').text());
                var totalPayable = subTotal + taxAmount + shippingTotal;
                $('#showPrice').text(shippingTotal);
                $('#showPriceInput').val(shippingTotal);
                $('#totalPayable').text(totalPayable);
            }
        })
    }

</script>




{{--product details page product color checkbox--}}
<script>
    // and attach a click event handler
    $("input:checkbox").on('click', function() {
        // in the handler, 'this' refers to the box clicked on
        var $box = $(this);
        if ($box.is(":checked")) {
            // the name of the box is retrieved using the .attr() method
            // as it is assumed and expected to be immutable
            var group = "input:checkbox[name='" + $box.attr("name") + "']";
            // the checked state of the group/box on the other hand will change
            // and the current value is retrieved using .prop() method
            $(group).prop("checked", false);
            $box.prop("checked", true);
        } else {
            $box.prop("checked", false);
        }
    });
</script>
