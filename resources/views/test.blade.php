<input type="text" id="search">

<script src="/js/jquery.js"></script>
<script src="/js/jquery-ui.js"></script>
<script>
    $(function() {

        var flowers = [{label: "Астры (бордовые)", value: "Астры"},
            {label: "Нарциссы(белые)", value: "Нарциссы"},
            {label: "Розы (розовые)", value: "Розы"},
            {label: "Пионы (розовые)", value: "Пионы"}]

        $('#search').autocomplete({
            source: flowers
        })
    });
</script>