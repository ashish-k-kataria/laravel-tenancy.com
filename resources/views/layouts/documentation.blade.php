@extends('layouts.app')

@section('content')
    <section class="mt-4">
        <v-layout
                column
                align-center
                justify-center
        >
            <h1 class="display-2">
                {{ $title }}
            </h1>
        </v-layout>
    </section>

    <section class="mt-1 mb-4">
        <v-layout row>
            <v-flex xs1 offset-md1 md2>
                @include('documentation.navigation')
            </v-flex>
            <v-flex xs11 md6 offset-md1>
                <v-card raised>
                    @if(config('github.documentation-repo-url'))
                    <v-card-text class="pa-5 documentation-content">
                        <v-btn
                            href="{{ config('github.documentation-repo-url') }}/edit/master/resources/markdown/documentation/{{ $slug }}.md"
                            absolute small
                            secondary fab
                            top right
                            v-tooltip:left="{ html: 'Suggest edits on GitHub' }"
                        >
                            <v-icon class="white--text">mdi-github-face</v-icon>
                        </v-btn>
                        @endif
                        {!! $content !!}
                    </v-card-text>
                </v-card>
            </v-flex>
        </v-layout>
    </section>
@endsection