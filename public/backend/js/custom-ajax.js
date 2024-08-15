/*
* MAANLMS CUSTOM AJAX
 * ------------------
 * You should not use this file in production.
* */
"use strict";
$(document).ready(function(){
    $.ajaxSetup({ headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]') } });
    //user
    var permissions_box = $("#permissions_box");
    var permissions_checkbox_list = $("#permissions_checkbox_list");

    permissions_box.hide()//hide permission box

    $("#role").on("change",function (){
        var role = $(this).find(":selected");
        var role_id = role.data("role-id");
        var role_slug = role.data("role-slug") ;
            permissions_checkbox_list.empty();

        $.ajax({
            url:"users",
            method:"get",
            dataType:"json",
            data:{
                role_id:role_id,
                role_slug:role_slug
            }

        }).done(function (data){
            //show permission box
            permissions_box.show();

            $.each(data,function (index,element){
                $(permissions_checkbox_list).append(
                    '<div class="form-group">'+

                    '<input type="checkbox" class="custom-control-input" name="permissions[]" id="'+element.slug+'" value="'+element.id+'" checked="checked" >'+
                    '<label class="custom-control-label" for="'+element.slug+'">'+element.name+'</label>'+
                    '</div>'
                )
            });
        });
    });

    //user edit
    var user_permissions_box = $("#user_permissions_box");
    permissions_box.hide()//hide permissions box

    $("#roleedit").on("change",function (){
        var role = $(this).find(":selected");
        var role_id = role.data("role-id");
        var role_slug = role.data("role-slug") ;
            permissions_checkbox_list.empty();
            user_permissions_box.empty();

        $.ajax({
            url:config.routes.userrole,
            method:"get",
            dataType:"json",
            data:{
                role_id:role_id,
                role_slug:role_slug
            }
        }).done(function (data){

            permissions_box.show();
            $.each(data,function (index,element){
                $(permissions_checkbox_list).append(
                    '<div class="form-group">'+

                    '<input type="checkbox" class="custom-control-input" name="permissions[]" id="'+element.slug+'" value="'+element.id+'" checked="checked" >'+
                    '<label class="custom-control-label" for="'+element.slug+'">'+element.name+'</label>'+
                    '</div>'
                )
            });
        });
    });
});
