var branch_id = $('#branch_id');
var user_name = $('#user_name');
var user_pass = $('#user_pass');

branch_id.keydown(function(e) {
    if (e.key === "Enter") {
        check_branch();
    }
});

user_name.keydown(function(e) {
    if (e.key === "Enter") {
        check_user();
    }
});

user_pass.keydown(function(e) {
    if (e.key === "Enter") {
        check_pass();
    }
});

$(function() {

    $('#show_login').click(function() {
        show_login_0();
    })

    $('#back1').click(function() {
        hide_login_0();
    })

    $('#back2').click(function() {
        show_branch();
    })

    $('#back3').click(function() {
        show_user();
    })

    $('#next1').click(function() {
        check_branch();
    })

    $('#next2').click(function() {
        check_user();
    })

    $('#next3').click(function() {
        check_pass();
    })
});

function show_login_0() {
    $('#show_login').hide(250, function() {
        $('#login_form').show(250);
        $('#login_form').ready(function() {
            $('#back1').show(250);
            $('#next1').show(250);

            $('#branch_id').focus();
        })
    });
}

function hide_login_0() {
    $('#back1').hide(250);
    $('#next1').hide(250);
    $('#login_form').hide(250, function() {
        $('#show_login').show(250);
        // $('#branch_id').val('');
    })
}

function show_branch() {
    $('#back2').hide(250);
    $('#next2').hide(250);
    $('#back1').show(250);
    $('#next1').show(250);
    $('#branch_nm').hide(250);
    user_name.hide(250);
    branch_id.show(250);
    branch_id.focus();
}

function show_user() {
    $('#back3').hide(250);
    $('#next3').hide(250);
    $('#back2').show(250);
    $('#next2').show(250);
    $('#user_nm').hide(250);
    $('#user_avatar').hide(250);
    user_pass.hide(250);
    user_name.show(250);
    user_name.focus();
}

function check_branch() {
    $('small').remove()
    if (branch_id.val() == '') {
        branch_id.focus().addClass('is-invalid')
            .after(`<small class="form-text text-danger">Branch ID Tidak boleh kosong...</small>`)
    } else {
        $.post(url + 'welcome/check_branch', {
            'branch_id': branch_id.val()
        }, function(result) {
            if (result == 'no') {
                branch_id.focus().addClass('is-invalid')
                    .after(`<small class="form-text text-danger">Branch ID Tidak terdaftar...</small>`)
            } else {
                $('#back1').hide(250);
                $('#next1').hide(250);
                branch_id.hide(250, function() {
                    user_name.show(250);
                    $('#branch_nm').show(250);
                    $('#next2').show(250);
                    $('#back2').show(250);
                    $('#branch_nm').html(`<b>${result}</b>`);
                    user_name.focus();
                });
            }
        });
    }
}


function check_user() {
    $('small').remove()
    if (user_name.val() == '') {
        user_name.focus().addClass('is-invalid')
            .after(`<small class="form-text text-danger">Username Tidak boleh kosong...</small>`)
    } else {
        $.post(url + 'welcome/check_user', {
            'user_name': user_name.val(),
            'branch_id': branch_id.val()
        }, function(result) {
            if (result.ress == 'no') {
                user_name.focus().addClass('is-invalid')
                    .after(`<small class="form-text text-danger">Username belum terdaftar...</small>`)
            } else {
                user_name.hide(250);
                user_pass.show(250);
                $('#next2').hide(250);
                $('#next3').show(250);
                $('#back2').hide(250);
                $('#back3').show(250);
                $('#user_nm').show(250);
                $('#user_avatar').show(250);
                $('#user_nm').html(`Selamat Datang : <b>${result.full_name}</b>`)
                $('#user_avatar').attr('src', `${url}assets/images/users/${result.user_avatar}`);
                user_pass.focus();
            }
        }, 'json');
    }
}

function check_pass() {
    $('small').remove()
    if (user_pass.val() == '') {
        user_pass.focus().addClass('is-invalid')
            .after(`<small class="form-text text-danger">Password Tidak boleh kosong...</small>`)
    } else {
        $.post(url + 'welcome/check_pass', {
            'user_pass': user_pass.val(),
            'user_name': user_name.val()
        }, function(result) {
            if (result == 'no') {
                user_pass.focus().addClass('is-invalid')
                    .after(`<small class="form-text text-danger">Password yang anda masukan salah...</small>`)
            } else {
                window.location.replace(url + 'dashboard');
            }
        });
    }
}