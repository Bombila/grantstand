@foreach($modals as $modal)

    <div id="myModal-{{ $modal->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel{{ $modal->id }}"
         class="modal fade">
        <div role="document" class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"></button>

                    @if($modal->type === 'image')

                        <img src="{{ $modal->image }}" class="modal-hero">

                    @endif

                    @if($modal->type === 'youtube')

                        <div class="modal-hero embed-responsive embed-responsive-16by9">
                            <?php echo $modal->iframe; ?>
                        </div>

                    @endif

                    <h4 id="myModalLabel{{ $modal->id }}" class="header header--modal">{{ $modal->title }}</h4>

                </div>
                <div class="modal-body"> {{ $modal->text  }}<br>

                    <div class="centered hidden-md">
                        <button type="button" data-dismiss="modal" class="button">Close</button>
                    </div>
                </div>

                @if($modal->social_icons)

                    <div class="modal-footer">
                        <div class="social social--modal"><a href="#" class="social__link">
                                <svg class="social__icon">
                                    <use xlink:href="images/icons.svg#soc-fb"></use>
                                </svg>
                            </a><a href="#" class="social__link">
                                <svg class="social__icon">
                                    <use xlink:href="images/icons.svg#soc-tw"></use>
                                </svg>
                            </a><a href="#" class="social__link">
                                <svg class="social__icon">
                                    <use xlink:href="images/icons.svg#soc-in"></use>
                                </svg>
                            </a><a href="#" class="social__link">
                                <svg class="social__icon">
                                    <use xlink:href="images/icons.svg#soc-yt"></use>
                                </svg>
                            </a></div>
                    </div>

                @endif

            </div>
        </div>
    </div>

@endforeach

