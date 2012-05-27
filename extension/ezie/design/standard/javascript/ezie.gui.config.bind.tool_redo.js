// ## BEGIN COPYRIGHT, LICENSE AND WARRANTY NOTICE ##
// SOFTWARE NAME: eZ Image Editor extension for eZ Publish
// SOFTWARE RELEASE: 1.4.0-rc1
// COPYRIGHT NOTICE: Copyright (C) 1999-2012 eZ Systems AS
// SOFTWARE LICENSE: GNU General Public License v2
// NOTICE: >
//   This program is free software; you can redistribute it and/or
//   modify it under the terms of version 2.0  of the GNU General
//   Public License as published by the Free Software Foundation.
// 
//   This program is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
// 
//   You should have received a copy of version 2.0 of the GNU General
//   Public License along with this program; if not, write to the Free
//   Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
//   MA 02110-1301, USA.
// ## END COPYRIGHT, LICENSE AND WARRANTY NOTICE ##

ezie.gui.config.bind.tool_redo = function() {
    if (!ezie.history().hasSuccessor()) {
        return;
    }

    ezie.history().redo();
    ezie.gui.eziegui.getInstance().refreshImages();

    if (ezie.history().hasAntecedent()) {
        ezie.gui.eziegui.getInstance().activateUndo();
    }

    if (!ezie.history().hasSuccessor()) {
        ezie.gui.eziegui.getInstance().desactivateRedo();
    }

    ezie.gui.config.zoom().reZoom(true);
}
