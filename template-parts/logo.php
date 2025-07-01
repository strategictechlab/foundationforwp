<div class="logo">
    <span class="first">Foundation</span> <span class="second">WP</span>
</div>

<style>
    .logo {
        position: relative;
        overflow: hidden;
        
        .first, .second {
            display: inline-block;
            font-size: 20px;
            font-weight: bold;
            padding: 0.5em 1em;
        }
        .first {
            background: #1779ba;
            color: white;
            position: relative;
            padding-right: 1.5rem;
            &:before {
                content: '';
                position: absolute;
                top: 0;
                right: -5px;
                width: 10px;
                height: 100%;
                background: white;
            }

            &:after {
                content: 'for';
                position: absolute;
                top: 50%;
                right: 0;
                transform: translate(50%, -50%);
                background: white;
                color: #1779ba;
                padding: 5px;
                font-size: 14px;
                font-weight: 400;
                line-height: 1;
            }
        }
        .second {
            background: #1779ba;
            color: white;
            padding-left: 1.5rem;
        }
    }
</style>