<style>
    .house .img {
        position: relative;
        overflow: hidden;
        height: 200px;
        border-radius: 3px;
    }

    .house .img::after {
        content: 'Before';
        position: absolute;
        top: 12px;
        left: 12px;
        font-size: 13px;
        padding: 3px 6px 4px;
        border-radius: 3px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        background-color: #ff4961;
    }

    .house .img:hover::after {
        content: 'After';
    }

    .img img:nth-child(1) {
        left: 0;
    }

    .img img:nth-child(2) {
        left: 100%;
    }

    .img:hover img:nth-child(1) {
        left: -100%;
    }

    .img:hover img:nth-child(2) {
        left: 0;
    }

    .img img {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: left .5s;
    }
    
</style>

<div class="bg-gray pt-5 pb-5">
    <div class="container bg-white p-4 mb-5 box-shadow">
        <div class="flex-between pb-4 mb-4 border-bottom">
            <div class="fs-4 font-weight-bold">게시글</div>
            <button class="btn btn-main" data-toggle="modal" data-target="#house_insert">글쓰기</button>
        </div>
        <div class="houses row"></div>
    </div>
</div>

<div id="house_insert" class="modal fade">
    <div class="modal-dialog">
        <form action="/house/insert" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="fs-3">글작성</span>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="before">before 이미지 파일</label>
                        <input type="file" name="before" accept="image/*" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="after">after 이미지 파일</label>
                        <input type="file" name="after" accept="image/*" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="knowhow">내용</label>
                        <textarea name="knowhow" id="knowhow" cols="30" rows="10" placeholder="노하우를 입력해주세요." class="form-control"></textarea>
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

<div id="review_insert" class="modal fade">
    <div class="modal-dialog">
        <form>
            <div class="modal-content">
                <div class="modal-header">
                    <span class="fs-3">평점주기</span>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="hidx" id="hidx">
                    <div class="form-group">
                        <select name="review" id="review" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function getTemplate() {
        ajax('/houses/list', "GET", [], (resp) => {
            resp = JSON.parse(resp);
            document.querySelector(".houses").innerHTML = "";
            resp.list.forEach(data => {
                document.querySelector(".houses").innerHTML += template(data);
            });
        });
    }

    function template(data) {
        let dom = `
        <div class="house col-lg-4 col-md-6 mb-5">
            <div class="img">
                <img src="/uploads/${data.before}" alt="img" class="img-cover">
                <img src="/uploads/${data.after}" alt="img" class="img-cover">
            </div>
            <div class="info">
                <div class="font-weight-bold mt-2 fs-m1">${data.name}(${data.id})</div>
                <div class="mt-2 mb-2 text-break color-333">${data.knowhow}</div>
                <div class="flex-between mt-3">
                    <div class="create_at fs-m1 color-666">${data.create_at}</div>
                    <div>
                        <i class="fa fa-star color-yellow"></i>
                        ${data.grade}
                    </div>
                </div>`;
        if('<?= user()->idx ?>' != data.user_idx && !data.check){
            dom += `<div class="btn border-white color-white bg-purple mt-3" onClick="openPopup('hidx');"
                    data-toggle="modal" data-target="#review_insert" data-idx="${data.hidx}">평점주기</div>`;
        }

        dom += `
            </div>
        </div>
        `
        return dom;
    }

    getTemplate();

    let review = document.querySelector("#review");
    review.addEventListener("change", () => {
        let value = review.options[review.selectedIndex].value;
        if(value == "default") return;
        let data = new FormData(document.querySelector("#review_insert form"));
        ajax('/house/review', "POST", data, data => {
            getTemplate();
            $("#review_insert").modal('hide');
        });
    });
</script>