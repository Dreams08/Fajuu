<?php include("../includes/header.php");?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Entrada</title>
        
        <!-- Link accesos a archivos css internos -->
        <link rel="stylesheet" href="../styles/styles.css">
        <link rel="stylesheet" href="../styles/header.css">
        <link rel="stylesheet" href="../styles/footer.css">

        <link rel="stylesheet" href="../styles/stylesPages/entrada/entrada.css">
    </head>
    <body>
        <main class="main">
            <section class="section-entradas">
                <div class="proveedor_entradas">
                    <h1>Proveedor</h1>
                    <form class="section-proveedor" action="">
                        <div class="frm-proveedor">
                            <label for="lbl-idProveedor">ID proveedor</label>
                            <input class="inp-idProveedor" id="inp-idProveedor" type="text">

                            <label for="lbl-nitProveedor">NIT</label>
                            <input class="inp-nitProveedor" id="inp-nitProveedor" type="text">
                        </div>
                        <div class="proveedor-butons">
                            <button class="btn proveedor-buttons_limpiar">Limpiar</button>
                            <button class="btn proveedor-buttons_buscar">Buscar</button>
                        </div>
                    </form>
                </div>

                <div class="factura_entradas">
                    <h1>Factura</h1>
                    <form class="section-fatura" action="">
                        <div class="frm-factura">
                                <label for="lbl-idFactura">ID factura</label>
                                <input class="inp-idFactura" id="inp-idFactura" type="text">

                                <label for="lbl-estado">Estado</label>
                                <select class="slc-estado" id="slc-estado">
                                    <option value="" selected>No definido</option>
                                    <option value="">Pendiente</option>
                                    <option value="">Pago</option>
                                    <option value="">Cancelado</option>
                                </select>
                        </div>
                        <div class="factura-buttons">
                            <button class="btn factura-buttons_cargarFactura">Cargar factura</button>
                            <p>Solo formato PDF</p>
                        </div>
                    </form>
                </div>

                <div class="productos_entradas">
                    <h1>Productos</h1>
                    <form class="section-producto" action="">
                        <div class="frm-producto">
                            <div class="productos-informacion">
                                <label for="lbl-categoria">Categoria</label>
                                <select class="slc-categoria" id="slc-categoria">
                                    <option value="" selected>No definido</option>
                                    <option value="">Congelado</option>
                                    <option value="">Refrigerado</option>
                                    <option value="">Abarrotes</option>
                                </select>

                                <label for="lbl-idProducto">ID producto</label>
                                <input class="inp-idProducto" id="inp-idProducto" type="text">         
                            </div>

                            <div class="productos-informacion">
                                <label for="lbl-cantidad_producto">Cantidad</label>
                                <input class="inp-cantidad_producto" id="inp-cantidad_producto" type="text">

                                <label for="lbl-precio_producto">Precio</label>
                                <input class="inp-precio_producto" id="inp-precio_producto" type="text" placeholder="COP">
                                    

                            </div>
                        </div>
                        <div class="proveedor-buttons">
                            <button class="btn proveedor-buttons_cargar">Cargar</button>
                        </div>
                    </form>
                </div>

                <div class="table">
                    <table>
                        <thead>
                            <th>Item</th>
                            <th>ID producto</th>
                            <th>Descripcion</th>
                            <th>Categoria</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>

        <!-- Footer - buttons action -->
        <footer class="footer">
            <div class="action-buttons">
                <a href="/pages/home.html" class="btn btn-primary">Volver</a>
                <a href="/pages/entrada/entrada.html" class="btn btn-second">Enviar</a>
            </div>
        </footer>
    </body>
</html>