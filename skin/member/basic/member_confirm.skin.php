<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<!-- 회원 패스워드 확인 시작 { -->
<link rel="stylesheet" href="<?php echo $member_skin_url ?>/style.css">

<div id="mb_confirm" class="mbskin">
    <h1><?php echo $g5['title'] ?></h1>

    <p>
        <strong>패스워드를 한번 더 입력해주세요.</strong>
        <?php if ($url == 'member_leave.php') { ?>
        패스워드를 입력하시면 회원탈퇴가 완료됩니다.
        <?php }else{ ?>
        회원님의 정보를 안전하게 보호하기 위해 패스워드를 한번 더 확인합니다.
        <?php }  ?>
    </p>

    <form name="fmemberconfirm" action="<?php echo $url ?>" onsubmit="return fmemberconfirm_submit(this);" method="post">
    <input type="hidden" name="mb_id" value="<?php echo $member['mb_id'] ?>">
    <input type="hidden" name="w" value="u">

    <fieldset>
        회원아이디
        <span id="mb_confirm_id"><?php echo $member['mb_id'] ?></span>

        <label for="confirm_mb_password">패스워드<strong class="sound_only">필수</strong></label>
        <input type="password" name="mb_password" id="confirm_mb_password" required class="required frm_input" size="15" maxLength="20">
        <input type="submit" value="확인" id="btn_submit" class="btn_submit">
    </fieldset>

    </form>

    <div class="btn_confirm">
        <a href="<?php echo G5_URL ?>">메인으로 돌아가기</a>
    </div>

</div>

<script>
function fmemberconfirm_submit(f)
{
    document.getElementById("btn_submit").disabled = true;

    return true;
}
</script>
<!-- } 회원 패스워드 확인 끝 -->