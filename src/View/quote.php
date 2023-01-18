<div class="bg-gray pt-5 pb-5">
    <div class="container bg-white p-4 mb-5 box-shadow">
        <div class="flex-between pb-4 mb-4 border-bottom">
            <div class="fs-4 font-weight-bold">시공 견적 요청 리스트</div>
            <button class="btn" data-toggle="modal" data-target="#req_quote">견적 요청</button>
        </div>
        <div class="table">
            <div class="table-head font-weight-bold border-bottom">
                <div class="flex-10">회원정보</div>
                <div class="flex-50">내용</div>
                <div class="flex-10">상태</div>
                <div class="flex-10">견적개수</div>
                <div class="flex-10">시공일</div>
                <div class="flex-10">기능버튼</div>
            </div>
            <?php foreach ($req_quotes as $key => $quote) { ?>
            <div class="table-row fs-m2 border-bottom">
                <div class="flex-10"><?= $quote->name ?>(<?= $quote->id ?>)</div>
                <div class="flex-50 text-left p-3"><?= $quote->content ?></div>
                <div class="flex-10"><?= $quote->status == 0 ? '진행 중' : '완료' ?></div>
                <div class="flex-10"><?= $quote->cnt ?></div>
                <div class="flex-10"><?= $quote->date ?></div>
                <div class="flex-10">
                    <?php if($quote->status == 0 && user()->specia && !$quote->check) { ?>
                        <button class="btn border-white color-white bg-purple" onClick="openPopup('req_idx')" data-toggle="modal" data-target="#resp_quote" data-idx="<?= $quote->rqidx ?>">견적보내기</button>
                    <?php } ?>
                    <?php if($quote->id == user()->id) { ?>
                        <button class="btn border-white color-white bg-purple" onClick="location.href='/quote/<?= $quote->rqidx ?>'">견적보기</button>
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php if(user()->specia) { ?>
    <div class="container bg-white p-4 mb-5 box-shadow">
        <div class="flex-between pb-4 mb-4 border-bottom">
            <div class="fs-4 font-weight-bold">보낸 견적 리스트</div>
        </div>
        <div class="table">
            <div class="table-head font-weight-bold border-bottom">
                <div class="flex-15">회원정보</div>
                <div class="flex-40">내용</div>
                <div class="flex-15">입력한 비용</div>
                <div class="flex-15">시공일</div>
                <div class="flex-15">상태</div>
            </div>
            <?php foreach ($resp_quotes as $key => $quote) { ?>
            <div class="table-row fs-m2 border-bottom">
                <div class="flex-15"><?= $quote->name ?>(<?= $quote->id ?>)</div>
                <div class="flex-40 text-left p-3"><?= $quote->content ?></div>
                <div class="flex-15"><?= $quote->price ?></div>
                <div class="flex-15"><?= $quote->date ?></div>
                <div class="flex-15">
                <?php if($quote->rpstatus == 0) { ?>
                    진행 중
                <?php } else if($quote->rpstatus == 1) { ?>
                    미선택
                <?php } else if($quote->rpstatus == 2) { ?>
                    선택
                <?php } ?>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php } ?>
    
</div>

<div id="req_quote" class="modal fade">
    <div class="modal-dialog">
        <form action="/req_quote/insert" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="fs-3">견적 요청</span>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="date">시공일</label>
                        <input type="date" name="date" id="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="content">내용</label>
                        <textarea name="content" id="content" cols="30" rows="10" placeholder="내용을 입력해주세요." class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="text-right">
                        <button class="btn border-white color-white bg-purple">작성 완료</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div id="resp_quote" class="modal fade">
    <div class="modal-dialog">
        <form action="/resp_quote/insert" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="fs-3">견적 요청</span>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="req_idx" id="req_idx">
                    <div class="form-group">
                        <label for="price">비용</label>
                        <input type="number" name="price" placeholder="비용을 입력해주세요." class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="text-right">
                        <button class="btn border-white color-white bg-purple">입력 완료</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>