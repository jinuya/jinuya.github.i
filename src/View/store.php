<link rel="stylesheet" href="/css/store.css">

<!-- 메인 영역 시작 -->
<div class="bg-gray pt-5 pb-5">

    <div class="container bg-white p-4 mb-5 box-shadow position-relative">
        <div class="dropzone flex-center flex-column bg-purple color-white z5">
            <i class="fa fa-shopping-cart icon fa-3x mt-3"></i>
            <p class="fs-n2 mt-3">이곳에 상품을 넣어주세요.</p>
        </div>
        <div class="flex-between pb-4 border-bottom">
            <div class="fs-4 font-weight-bold">상품 리스트</div>
            <div class="search d-flex position-relative">
                <span class="search-icon"><i class="fa fa-search fa-sm"></i></span>
                <input type="text" placeholder="검색어를 입력하세요" id="search-input" class="form-control border">
            </div>
        </div>
        <div id="products" class="row"></div>
    </div>

    </div>

    <div class="shopping-cart-info mt-5">
    <div class="container h-100 flex-center flex-column">
        <div class="title fs-6 font-weight-bold">SHOPPING CART</div>
        <div class="content color-666">내집꾸미기 스토어에서 선택하신 상품의 장바구니 리스트입니다.</div>
    </div>
    </div>

    <div class="shopping-cart padding-b-7">
    <div class="container">
        <div id="cart"></div>
        <div class="total-price-form flex-between col-12 mt-3">
            <div>
                <span>총 합계</span>
                <span class="ml-3 text-muted">￦</span>
                <span class="ml-1 fs-5 total-price color-purple">0</span>
            </div>
            <button class="btn more btn-purple" data-toggle="modal" data-target="#buy">
                구매하기
                <span></span>
            </button>
        </div>
    </div>
</div>
<!-- 메인 영역 끝 -->

<!-- 구매 영역 시작 -->
<div id="buy" class="modal fade">
    <div class="modal-dialog">
        <form>
            <div class="modal-content">
                <div class="modal-header">
                    <span class="fs-3">구매하기</span>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="username">구매자 이름</label>
                        <input type="text" name="username" class="form-control" id="username"
                            placeholder="구매자 이름을 입력해 주세요">
                    </div>
                    <div class="form-group">
                        <label for="address">주소를</label>
                        <input type="text" name="address" class="form-control" id="address"
                            placeholder="주소를 입력해 주세요">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="text-right">
                        <button class="btn border-white color-white bg-purple buy-btn">구매 완료</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- 구매 영역 끝 -->

<!-- 구매 내역 영역 시작 -->
<div id="buyResult" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="fs-3">구매 내역</span>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <img class="w-100 border" src="" alt="">
            </div>
        </div>
    </div>
</div>
<!-- 구매 내역 영역 끝 -->

<script src="/js/App.js"></script>