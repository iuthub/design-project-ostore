// https://bootsnipp.com/snippets/featured/bootstrap-number-spinner-on-click-hold
// $(function() {
//     var action;
//     $(".number-spinner button").mousedown(function () {
//         btn = $(this);
//         input = btn.closest('.number-spinner').find('input');
//         btn.closest('.number-spinner').find('button').prop("disabled", false);

//         if (btn.attr('data-dir') == 'up') {
//             action = setInterval(function(){
//                 if ( input.attr('max') == undefined || parseInt(input.val()) < parseInt(input.attr('max')) ) {
//                     input.val(parseInt(input.val())+1);
//                 }else{
//                     btn.prop("disabled", true);
//                     clearInterval(action);
//                 }
//             }, 50);
//     	} else {
//             action = setInterval(function(){
//                 if ( input.attr('min') == undefined || parseInt(input.val()) > parseInt(input.attr('min')) ) {
//                     input.val(parseInt(input.val())-1);
//                 }else{
//                     btn.prop("disabled", true);
//                     clearInterval(action);
//                 }
//             }, 50);
//     	}
//     }).mouseup(function(){
//         clearInterval(action);
//     });
// });

// <div class="container">
//     <div class="row">
//         <div class="col-xs-3 col-xs-offset-3">
//             <p>Min: -10</p>
//             <p>Max: 40</p>
//         </div>
//     </div>
//     <div class="row">
//         <div class="col-xs-3 col-xs-offset-3">
//             <div class="input-group number-spinner">
//                 <span class="input-group-btn data-dwn">
//                     <button class="btn btn-default btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
//                 </span>
//                 <input type="text" class="form-control text-center" value="1" min="0" max="100">
//                 <span class="input-group-btn data-up">
//                     <button class="btn btn-default btn-info" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
//                 </span>
//             </div>
//         </div>
//     </div>
//     <div class="row">
//         <div class="col-xs-3 col-xs-offset-3">
//             <p>It's responsive too!</p>
//         </div>
//     </div>
// </div>


$(document).on('click', '.number-spinner button', function () {    
    var btn = $(this),
        oldValue = btn.closest('.number-spinner').find('input').val().trim(),
        newVal = 0;
    
    if (btn.attr('data-dir') == 'up') {
        newVal = parseInt(oldValue) + 1;
    } else {
        if (oldValue > 1) {
            newVal = parseInt(oldValue) - 1;
        } else {
            newVal = 1;
        }
    }
    btn.closest('.number-spinner').find('input').val(newVal);
});