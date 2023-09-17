    <div>
        <h3>{{ __('Education') }}</h3>
        <div class="category mb-10">
            <h4>Boolean Careers</h4>
            <div>Master Full Stack Web Developer</div>
            <span class="period">04/2023 - 10/2023</span>
            <p>
                {{ __('messages.education-boolean') }}
            </p>
            <h4>{{ __('messages.diploma') }}</h4>
            <div>{{ __('messages.diploma-title') }}</div>
            <span class="period">2010</span>
            <p>
                {{ __('messages.diploma-description') }}
            </p>
        </div>
        <h3>{{ __('Skills') }}</h3>
        <div class="category">
            <h4>{{ __('Technical Skills') }}</h4>
            <ul>
                <li>
                    <strong>Frontend</strong>: Html, Css, Sass, Bootstrap, Tailwind, Javascript, Typescript, Vue 3,
                    AlpineJs;
                </li>
                <li>
                    <strong>Backend</strong>: PHP, Laravel, MySQL, RESTful APIs;
                </li>
                <li><strong>{{ __('Other') }}</strong>:
                    Git, Github Workflows, Docker, Linux & Windows
                </li>
            </ul>
        </div>
        <div class="category">
            <h4>{{ __('Personal Skills') }}</h4>
            <ul>
                <li>{{ __('English') }} - C1</li>
                <li>{{ __('Problem Solving') }}</li>
                <li>{{ __('Teamwork and Communication') }}</li>
                <li>{{ __('Deadline and Time Management') }}</li>
            </ul>
        </div>

    </div>
    <div>
        <h3>{{ __('Experience') }}</h3>
        <div class="category">
            <h4>JR Full Stack Web Developer Trainee</h4>
            <div>Boolean</div>
            <span class="period">04/2023 - 10/2023</span>
            <p>
                {!! __('messages.experience-boolean-part-1') !!}
            </p>
            <p>
                {!! __('messages.experience-boolean-part-2') !!}
            </p>
        </div>
        <div class="category">
            <h4>Freelancer Work</h4>
            <div>Dellasantapsicologo.it <br> {{ __('messages.dsp-short-description') }}</div>
            <span class="period">{{ __('Summer') }} 2023</span>

            <p>
                {{ __('messages.dsp-overview') }}
            </p>
            <p>
                {{ __('messages.dsp-outcome') }}
            </p>
        </div>
    </div>
