<div class="bg-gray pt-5 pb-5">
    <div class="container bg-white p-4 mb-5 box-shadow">
            <div class="flex-between pb-4 mb-4 border-bottom">
                <div class="fs-4 font-weight-bold">보낸 견적 리스트</div>
            </div>
            <div class="table">
                <div class="table-head font-weight-bold border-bottom">
                    <div class="flex-30">전문가정보</div>
                    <div class="flex-30">비용</div>
                    <div class="flex-30">기능버튼</div>
                </div>
                <?php foreach ($quotes as $key => $quote) { ?>
                <div class="table-row fs-m2 border-bottom p-3">
                    <div class="flex-30"><?= $quote->name ?>(<?= $quote->id ?>)</div>
                    <div class="flex-30"><?= $quote->price ?></div>
                    <div class="flex-30">
                        <?php if($quote->rqstatus == 0) { ?>
                            <button class="btn border-white color-white bg-purple" onClick="location.href='/quote/update/<?= $quote->resp_idx ?>'">선택</button>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>