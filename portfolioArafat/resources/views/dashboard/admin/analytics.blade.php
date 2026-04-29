@extends('layout.admin_dashboard')
@section('admin_dashboard')
<section class="home">
    <div class="content">
        <div class="grid-2">
            <div class="card">
                <h2 style="margin-bottom: 20px;">Revenue Trend</h2>
                <div
                    style="height: 200px; background: var(--dark); border-radius: 8px; display: flex; align-items: flex-end; justify-content: space-around; padding: 20px;">
                    <div
                        style="width: 30px; height: 60%; background: linear-gradient(180deg, var(--primary), var(--primary-dark)); border-radius: 4px 4px 0 0;">
                    </div>
                    <div
                        style="width: 30px; height: 75%; background: linear-gradient(180deg, var(--primary), var(--primary-dark)); border-radius: 4px 4px 0 0;">
                    </div>
                    <div
                        style="width: 30px; height: 85%; background: linear-gradient(180deg, var(--primary), var(--primary-dark)); border-radius: 4px 4px 0 0;">
                    </div>
                    <div
                        style="width: 30px; height: 70%; background: linear-gradient(180deg, var(--primary), var(--primary-dark)); border-radius: 4px 4px 0 0;">
                    </div>
                    <div
                        style="width: 30px; height: 90%; background: linear-gradient(180deg, var(--primary), var(--primary-dark)); border-radius: 4px 4px 0 0;">
                    </div>
                    <div
                        style="width: 30px; height: 95%; background: linear-gradient(180deg, var(--primary), var(--primary-dark)); border-radius: 4px 4px 0 0;">
                    </div>
                </div>
            </div>

            <div class="card">
                <h2 style="margin-bottom: 20px;">Top Services</h2>
                <div>
                    <div style="margin-bottom: 16px;">
                        <div
                            style="display: flex; justify-content: space-between; margin-bottom: 6px; font-size: 13px;">
                            <span>Web Design</span>
                            <span style="color: var(--primary);">145</span>
                        </div>
                        <div
                            style="width: 100%; height: 8px; background: var(--dark); border-radius: 4px; overflow: hidden;">
                            <div style="width: 85%; height: 100%; background: var(--primary);"></div>
                        </div>
                    </div>
                    <div style="margin-bottom: 16px;">
                        <div
                            style="display: flex; justify-content: space-between; margin-bottom: 6px; font-size: 13px;">
                            <span>Web Development</span>
                            <span style="color: var(--primary);">128</span>
                        </div>
                        <div
                            style="width: 100%; height: 8px; background: var(--dark); border-radius: 4px; overflow: hidden;">
                            <div style="width: 75%; height: 100%; background: var(--primary);"></div>
                        </div>
                    </div>
                    <div>
                        <div
                            style="display: flex; justify-content: space-between; margin-bottom: 6px; font-size: 13px;">
                            <span>Mobile App Dev</span>
                            <span style="color: var(--primary);">89</span>
                        </div>
                        <div
                            style="width: 100%; height: 8px; background: var(--dark); border-radius: 4px; overflow: hidden;">
                            <div style="width: 52%; height: 100%; background: var(--primary);"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
