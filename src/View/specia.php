<style>

    .review img {
        width: 3.5rem;
        height: 3.5rem;
        object-fit: cover;
        border-radius: 50%;
    }

</style>

<div class="bg-gray pt-5 pb-5">

    <div class="container bg-white p-4 mb-5 box-shadow">
        <div class="flex-between pb-4 mb-4 border-bottom">
            <div class="fs-4 font-weight-bold">전문가 리스트</div>
        </div>
        <div class="specialist d-flex row">
        <?php foreach ($users as $key => $user) { ?>
            <div class="specia col-3 mt-3">
                <div style="height: 300px">
                    <img src="/uploads/<?= $user->img ?>" alt="<?= $user->name ?>" title="<?= $user->name ?>" class="img-cover">
                </div>
                <div>
                    <div class="flex-between mt-3">
                        <div><?= $user->name ?>(<?= $user->id ?>)</div>
                        <div>
                            <i class="fa fa-star color-yellow"></i>
                            <?= $user->grade ?>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                        <div class="btn border-white color-white bg-purple" onClick="openPopup('specia_idx')"
                        data-idx="<?= $user->idx ?>" data-toggle="modal" data-target="#review_insert">시공 후기작성</div>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>

    <div class="container bg-white p-4 mb-5 box-shadow">
        <div class="flex-between pb-4 border-bottom">
            <div class="fs-4 font-weight-bold">시공 후기 리스트</div>
        </div>
        <div class="d-flex row p-5">
            <?php foreach ($constList as $key => $const) { ?>
                <div class="review col-12 mb-5 border p-4" style="border-radius: 5px;">
                    <div class="d-flex pb-3 border-bottom">
                        <img src="/uploads/<?= $const->img ?>" alt="img">
                        <div class="flex-between w-100 pl-3">
                            <div>
                                <div class="fs-3 font-weight-bold"><?= $const->specia_name ?></div>
                                <div class="fs-0 color-999"><?= $const->specia_id ?></div>
                            </div>
                            <div class="text-right">
                                <div>
                                <?php for ($i=0; $i < $const->grade; $i++) { ?>
                                    <i class="fa fa-star color-yellow"></i>
                                <?php }?>
                                </div>
                                <div class="fs-m1 color-999">\ <?= number_format($const->price) ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="my-3 text-break font-weight-bold color-ccc"><?= $const->content ?></div>
                    <div class="color-999"><?= $const->user_name ?>(<?= $const->user_id ?>)</div>
                </div>
            <?php } ?>
        </div>
    </div>

</div>

<div id="review_insert" class="modal fade">
    <div class="modal-dialog">
            <form action="/review/insert" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="fs-3">시공 후기작성</span>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="specia_idx" id="specia_idx">
                    <div class="form-group">
                        <label for="price">비용</label>
                        <input type="number" name="price" placeholder="비용을 입력해주세요." class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="content">내용</label>
                        <textarea name="content" id="content" cols="30" rows="10" placeholder="내용을 입력해주세요." class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="grade">평점</label>
                        <input type="number" name="grade" id="grade" min="1" max="5" placeholder="평점을 입력해주세요." class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="text-right">
                        <input type="submit" value="작성 완료" onclick="return checkForm();" class="btn border-white color-white bg-purple">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>

    function checkForm() {
        if (grade.value < 1) {
            alert('평점은 1부터5 까지만 입력가능합니다.');
            return false;
        }
    }
</script>