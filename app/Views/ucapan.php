<div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">
  <!--begin::Messenger-->
  <div class="card" id="kt_chat_messenger">
    <!--begin::Card header-->
    <div class="card-header" id="kt_chat_messenger_header">
      <!--begin::Title-->
      <div class="card-title">
        <!--begin::User-->
        <div class="d-flex justify-content-center flex-column me-3">
          <a href="javascript:;" class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1">Ucapan & Doa <span class="badge badge-success badge-circle w-10px h-10px me-1"></span></a>
        </div>
        <!--end::User-->
      </div>
      <!--end::Title-->
      <!--begin::Card toolbar-->
      <div class="card-toolbar">
        <!--begin::Menu-->
        <div class="me-n3">
          <button class="btn btn-sm btn-icon btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
            <i class="bi bi-three-dots fs-2"></i>
          </button>
        </div>
        <!--end::Menu-->
      </div>
      <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body">
      <!--begin::Messages-->
      <div class="scroll-y me-n5 pe-5 h-300px h-lg-auto" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_chat_messenger_header, #kt_chat_messenger_footer" data-kt-scroll-wrappers="#kt_content, #kt_chat_messenger_body" data-kt-scroll-offset="-2px" style="">

        <?php if (empty($ucapan)) : ?>
          <div class="alert alert-dismissible bg-light-danger d-flex flex-center flex-column py-10 px-10 px-lg-20 mb-10">
            <!--begin::Icon-->
            <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
            <span class="svg-icon svg-icon-5tx svg-icon-danger mb-5">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"></rect>
                <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black"></rect>
                <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black"></rect>
              </svg>
            </span>
            <!--end::Svg Icon-->
            <!--end::Icon-->
            <!--begin::Content-->
            <div class="text-center text-dark">
              <h1 class="fw-bolder mb-5">Belum ada ucapan</h1>
              <div class="separator separator-dashed border-danger opacity-25 mb-5"></div>
            </div>
            <!--end::Content-->
          </div>
        <?php else : ?>
          <?php foreach ($ucapan as $data) : ?>
            <?php
            $tgl_input = new DateTime(date("Y-m-d", strtotime($data['created_at'])));
            $today = new DateTime(date("Y-m-d"));
            $interval = $tgl_input->diff($today);
            $selisih = $interval->format('%a');
            if ($selisih != 0) {
              $tgl = tgl_indo(date("d-m-Y", strtotime($data['created_at'])));
              $jam = date("H:i", strtotime($data['created_at']));
              $tanggal = $tgl . ", " . $jam . "WIB";
            } else {
              $tanggal = humanize($data['created_at']);
            }
            $inisial = mb_substr($data['nama'], 0, 1);
            ?>
            <!--begin::Message(in)-->
            <div class="d-flex justify-content-start mb-10">
              <!--begin::Wrapper-->
              <div class="d-flex flex-column align-items-start">
                <!--begin::User-->
                <div class="d-flex align-items-center mb-2">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-45px symbol-circle">
                    <span class="symbol-label bg-light-primary text-primary fs-6 fw-bolder"><?= $inisial ?></span>
                    <div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2"></div>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-3">
                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1"><?= $data['nama'] ?></a>
                    <span class="text-muted fs-7 mb-1"><?= $tanggal ?></span>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::User-->
                <!--begin::Text-->
                <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">
                  <?= $data['ucapan'] ?>
                </div>
                <!--end::Text-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Message(in)-->
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
      <!--end::Messages-->
    </div>
    <!--end::Card body-->
    <!--begin::Card footer-->
    <div class="card-footer pt-4 text-center" id="kt_chat_messenger_footer">
      <h3 class=" fs-4x fs-lg-3x text-danger mt-10" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}" style="font-family: 'Great Vibes';">Lulu & Mufidz</h3>
    </div>
    <!--end::Card footer-->
  </div>
  <!--end::Messenger-->
</div>