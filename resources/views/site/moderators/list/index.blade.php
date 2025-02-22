@extends('layouts.merge.site')
@section('titulo', 'Moderadores')
@section('content')
    <div data-elementor-type="wp-page" data-elementor-id="261" class="elementor elementor-261">
        <div class="elementor-element elementor-element-e3368f0 e-flex e-con-boxed e-con e-parent" data-id="e3368f0"
            data-element_type="container"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;,&quot;grandconference_ext_is_background_parallax&quot;:&quot;false&quot;,&quot;grandconference_ext_is_background_backdrop&quot;:&quot;false&quot;,&quot;grandconference_ext_is_background_on_scroll&quot;:&quot;false&quot;,&quot;grandconference_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandconference_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandconference_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandconference_ext_is_sticky&quot;:&quot;false&quot;,&quot;grandconference_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandconference_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandconference_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandconference_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandconference_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandconference_ext_mobile_static&quot;:&quot;false&quot;}"
            data-core-v316-plus="true">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-0bd6d62 elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-spacer"
                    data-id="0bd6d62" data-element_type="widget"
                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;grandconference_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandconference_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandconference_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandconference_ext_is_sticky&quot;:&quot;false&quot;,&quot;grandconference_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandconference_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandconference_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandconference_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandconference_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandconference_ext_mobile_static&quot;:&quot;false&quot;}"
                    data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                        <style>
                            /*! elementor - v3.18.0 - 20-12-2023 */
                            .elementor-column .elementor-spacer-inner {
                                height: var(--spacer-size)
                            }

                            .e-con {
                                --container-widget-width: 100%
                            }

                            .e-con-inner>.elementor-widget-spacer,
                            .e-con>.elementor-widget-spacer {
                                width: var(--container-widget-width, var(--spacer-size));
                                --align-self: var(--container-widget-align-self, initial);
                                --flex-shrink: 0
                            }

                            .e-con-inner>.elementor-widget-spacer>.elementor-widget-container,
                            .e-con>.elementor-widget-spacer>.elementor-widget-container {
                                height: 100%;
                                width: 100%
                            }

                            .e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer,
                            .e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer {
                                height: 100%
                            }

                            .e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner,
                            .e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner {
                                height: var(--container-widget-height, var(--spacer-size))
                            }

                            .e-con-inner>.elementor-widget-spacer.elementor-widget-empty,
                            .e-con>.elementor-widget-spacer.elementor-widget-empty {
                                position: relative;
                                min-height: 22px;
                                min-width: 22px
                            }

                            .e-con-inner>.elementor-widget-spacer.elementor-widget-empty .elementor-widget-empty-icon,
                            .e-con>.elementor-widget-spacer.elementor-widget-empty .elementor-widget-empty-icon {
                                position: absolute;
                                top: 0;
                                bottom: 0;
                                left: 0;
                                right: 0;
                                margin: auto;
                                padding: 0;
                                width: 22px;
                                height: 22px
                            }
                        </style>
                        <div class="elementor-spacer">
                            <div class="elementor-spacer-inner"></div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-ed4fb02 elementor-widget elementor-widget-heading"
                    data-id="ed4fb02" data-element_type="widget"
                    data-settings="{&quot;grandconference_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandconference_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandconference_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandconference_ext_is_sticky&quot;:&quot;false&quot;,&quot;grandconference_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandconference_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandconference_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandconference_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandconference_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandconference_ext_mobile_static&quot;:&quot;false&quot;}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h1 class="elementor-heading-title elementor-size-default">Moderadores</h1>
                    </div>
                </div>
                <div class="elementor-element elementor-element-66b0c82 elementor-widget elementor-widget-grandconference-speaker-grid"
                    data-id="66b0c82" data-element_type="widget"
                    data-settings="{&quot;grandconference_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandconference_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandconference_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandconference_ext_is_sticky&quot;:&quot;false&quot;,&quot;grandconference_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandconference_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandconference_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandconference_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandconference_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandconference_ext_mobile_static&quot;:&quot;false&quot;}"
                    data-widget_type="grandconference-speaker-grid.default">
                    <div class="elementor-widget-container">
                        <div
                            class="grandconference-gallery-grid-content-wrapper layout-grandconference-three-cols wide-space">

                            @foreach ($moderators as $row)
                                <div
                                    class="gallery-grid-item static-hover grandconference-three-cols {{ $loop->iteration % 3 == 0 ? 'last' : '' }}">
                                    <div class="speaker-grid-image">
                                        <a href="#">
                                            <img width="660" height="770" decoding="async"
                                                src="/storage/{{ $row->photo }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="speaker-grid-content">
                                        <div class="overflow-inner">
                                            <div class="overflow-text">
                                                <h3 class="speaker-grid-title">
                                                    <a href="#">
                                                        {{ $row->name }}
                                                    </a>
                                                </h3>
                                                <div class="speaker-grid-subtitle">{{ $row->function }} -
                                                    {{ $row->company }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach




                            <br class="clear" />
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-9ef3b30 elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-spacer"
                    data-id="9ef3b30" data-element_type="widget"
                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;grandconference_ext_link_sidemenu&quot;:&quot;false&quot;,&quot;grandconference_ext_link_fullmenu&quot;:&quot;false&quot;,&quot;grandconference_ext_link_closed_fullmenu&quot;:&quot;false&quot;,&quot;grandconference_ext_is_sticky&quot;:&quot;false&quot;,&quot;grandconference_ext_is_scrollme&quot;:&quot;false&quot;,&quot;grandconference_ext_is_smoove&quot;:&quot;false&quot;,&quot;grandconference_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;grandconference_ext_is_infinite&quot;:&quot;false&quot;,&quot;grandconference_ext_is_fadeout_animation&quot;:&quot;false&quot;,&quot;grandconference_ext_mobile_static&quot;:&quot;false&quot;}"
                    data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                            <div class="elementor-spacer-inner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('CSS')
    <link rel='stylesheet' id='elementor-post-261-css'
        href='https://grandconferencev5-2.b-cdn.net/wp-content/uploads/elementor/css/post-261.css' type='text/css'
        media='all' />
@endsection

