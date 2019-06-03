@extends('layouts.application') @section('content')
<div class="m-content">
<div class="row">
        <div class="col-md-12">
            <div class="m-portlet m-portlet--light m-portlet--head-solid-bg">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <span class="m-portlet__head-icon m--font-transform-u" style="color:#302B3E;">
                                <i class="flaticon-graph"></i><span style="margin:24px;">Resumo ({{ Auth::user()['name'] }})</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                <!-- Estatisticas -->
                    <div class="row m-row--no-padding m-row--col-separator-xl">
                        <h5 class="m--font-danger">Estatísticas</h5>
                    </div>
                    <div class="row m-row--no-padding m-row--col-separator-xl">
                        <div class="col-md-12 col-lg-12 col-xl-6">
                            <div class="m-widget1">
                                <div class="m-widget1__item">
                                    <div class="row m-row--no-padding align-items-center">
                                        <div class="col">
                                            <h3 class="m-widget1__title">
                                            {{ $produtoMaisVendido['nome'] }}
                                            <i><strong>[{{ $produtoMaisVendido['occurrences']}} itens vendidos.]</strong></i>
                                            </h3>
                                            <span class="m-widget1__desc">
                                                Produto mais vendido.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fim Vendas -->
                    <!-- Vendas -->
                    <div class="row m-row--no-padding m-row--col-separator-xl">
                        <h5 class="m--font-danger">Vendas</h5>
                    </div>
                    <div class="row m-row--no-padding m-row--col-separator-xl">
                        <div class="col-md-12 col-lg-12 col-xl-4">
                            <div class="m-widget1">
                                <div class="m-widget1__item">
                                    <div class="row m-row--no-padding align-items-center">
                                        <div class="col">
                                            <h3 class="m-widget1__title">
                                                Vendas
                                            </h3>
                                            <span class="m-widget1__desc">
                                                Total em vendas lançadas.
                                            </span>
                                        </div>
                                        <div class="col m--align-right">
                                            <p>
                                                <i class="la la-shopping-cart" style="font-size:2em;"></i>
                                            </p>
                                            <span class="m-widget1__number m--font-wharever">
                                                {{ $vendasTotal }}
                                            </span>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 col-xl-4">
                            <div class="m-widget1">
                                <div class="m-widget1__item">
                                    <div class="row m-row--no-padding align-items-center">
                                        <div class="col">
                                            <h3 class="m-widget1__title">
                                                Vendas Recebidas
                                            </h3>
                                            <span class="m-widget1__desc">
                                                Valor de vendas recebido.
                                            </span>
                                        </div>
                                        <div class="col m--align-right">
                                            <p>
                                                <i class="la la-shopping-cart" style="font-size:2em;"></i>
                                            </p>
                                            <span class="m-widget1__number m--font-brand">
                                            {{ $valorRecebido }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 col-xl-4">
                            <div class="m-widget1">
                                <div class="m-widget1__item">
                                    <div class="row m-row--no-padding align-items-center">
                                        <div class="col">
                                            <h3 class="m-widget1__title">
                                                Vendas A Receber
                                            </h3>
                                            <span class="m-widget1__desc">
                                                Total a receber das vendas.
                                            </span>
                                        </div>
                                        <div class="col m--align-right">
                                            <p>
                                                <i class="la la-cart-arrow-down" style="font-size:2em;"></i>
                                            </p>
                                            <span class="m-widget1__number m--font-danger">
                                            {{ $valorAReceber }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fim Vendas -->
                    <!-- Compras -->
                    <div class="row m-row--no-padding m-row--col-separator-xl">
                        <h5 class="m--font-danger">Compras</h5>
                    </div>
                    <div class="row m-row--no-padding m-row--col-separator-xl">
                        <div class="col-md-12 col-lg-12 col-xl-4">
                            <div class="m-widget1">
                                <div class="m-widget1__item">
                                    <div class="row m-row--no-padding align-items-center">
                                        <div class="col">
                                            <h3 class="m-widget1__title">
                                                Compras
                                            </h3>
                                            <span class="m-widget1__desc">
                                                Valor total de compras.
                                            </span>
                                        </div>
                                        <div class="col m--align-right">
                                            <p>
                                                <i class="la la-credit-card" style="font-size:2em;"></i>
                                            </p>
                                            <span class="m-widget1__number m--font-brand">
                                            {{ $comprasTotal }}
                                            </span>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 col-xl-4">
                            <div class="m-widget1">
                                <div class="m-widget1__item">
                                    <div class="row m-row--no-padding align-items-center">
                                        <div class="col">
                                            <h3 class="m-widget1__title">
                                                Compras Pagas
                                            </h3>
                                            <span class="m-widget1__desc">
                                                Compras pagas.
                                            </span>
                                        </div>
                                        <div class="col m--align-right">
                                            <p>
                                                <i class="la la-credit-card" style="font-size:2em;"></i>
                                            </p>
                                            <span class="m-widget1__number m--font-danger">
                                            {{ $valorPago }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 col-xl-4">
                            <div class="m-widget1">
                                <div class="m-widget1__item">
                                    <div class="row m-row--no-padding align-items-center">
                                        <div class="col">
                                            <h3 class="m-widget1__title">
                                                Compras A Pagar
                                            </h3>
                                            <span class="m-widget1__desc">
                                                Totalização de compras a pagar.
                                            </span>
                                        </div>
                                        <div class="col m--align-right">
                                            <p>
                                                <i class="la la-credit-card" style="font-size:2em;"></i>
                                            </p>
                                            <span class="m-widget1__number m--font-danger">
                                            {{ $valorAPagar }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fim Compras -->
                    <!-- Contas Receber -->
                    <div class="row m-row--no-padding m-row--col-separator-xl">
                        <h5 class="m--font-danger">Contas a Receber</h5>
                    </div>
                    <div class="row m-row--no-padding m-row--col-separator-xl">
                        <div class="col-md-12 col-lg-12 col-xl-4">
                            <div class="m-widget1">
                                <div class="m-widget1__item">
                                    <div class="row m-row--no-padding align-items-center">
                                        <div class="col">
                                            <h3 class="m-widget1__title">
                                                Contas a Receber
                                            </h3>
                                            <span class="m-widget1__desc">
                                                Total em contas a receber
                                            </span>
                                        </div>
                                        <div class="col m--align-right">
                                            <p>
                                                <i class="la la-arrow-circle-down" style="font-size:2em;"></i>
                                            </p>
                                            <span class="m-widget1__number m--font-brand">
                                                R$0,00
                                            </span>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 col-xl-4">
                            <div class="m-widget1">
                                <div class="m-widget1__item">
                                    <div class="row m-row--no-padding align-items-center">
                                        <div class="col">
                                            <h3 class="m-widget1__title">
                                                Contas Recebidas Diário
                                            </h3>
                                            <span class="m-widget1__desc">
                                                Contas recebidas hoje
                                            </span>
                                        </div>
                                        <div class="col m--align-right">
                                            <p>
                                                <i class="la la-dollar" style="font-size:2em;"></i>
                                            </p>
                                            <span class="m-widget1__number m--font-success">
                                                R$0,00
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fim Compras -->
                    <!-- Contas Receber -->
                    <div class="row m-row--no-padding m-row--col-separator-xl">
                        <h5 class="m--font-danger">Contas a Pagar</h5>
                    </div>
                    <div class="row m-row--no-padding m-row--col-separator-xl">
                        <div class="col-md-12 col-lg-12 col-xl-4">
                            <div class="m-widget1">
                                <div class="m-widget1__item">
                                    <div class="row m-row--no-padding align-items-center">
                                        <div class="col">
                                            <h3 class="m-widget1__title">
                                                Contas a Pagar
                                            </h3>
                                            <span class="m-widget1__desc">
                                                Contas a pagar em aberto
                                            </span>
                                        </div>
                                        <div class="col m--align-right">
                                            <p>
                                                <i class="la la-arrow-circle-up" style="font-size:2em;"></i>
                                            </p>
                                            <span class="m-widget1__number m--font-brand">
                                                R$0,00
                                            </span>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 col-xl-4">
                            <div class="m-widget1">
                                <div class="m-widget1__item">
                                    <div class="row m-row--no-padding align-items-center">
                                        <div class="col">
                                            <h3 class="m-widget1__title">
                                                Contas Pagas Diário
                                            </h3>
                                            <span class="m-widget1__desc">
                                                Contas pagas hoje
                                            </span>
                                        </div>
                                        <div class="col m--align-right">
                                            <p>
                                                <i class="la la-euro" style="font-size:2em;"></i>
                                            </p>
                                            <span class="m-widget1__number m--font-danger">
                                                R$0,00
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fim Compras -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
